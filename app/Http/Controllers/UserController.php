<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;

use Auth;
use DB;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Image;
use File;
use Illuminate\Http\Request;
use App\Http\Requests;
use Input;
use Datetime;
use App\Newleads;
use App\Item;


class UserController extends Controller
{

  use AuthenticatesAndRegistersUsers, ThrottlesLogins;
  

    public function __construct()
    {
        $this->middleware('auth');
    }  

    public function index()
    {
      return view('auth.register');
    }

    public function test()
    {
      return view('client');
    }


    public function sett()
    {
       $usr=Auth::user();

      return view('Users.Client.customer', compact('usr'));
      
    }

    

    public function form()
    {
      if (Auth::user()->hasRole(['Owner', 'Admin']))
      {
        
        $usr=DB::table('users')->get();
        $rol=DB::table('roles')->get();

        $userRoles=DB::table('users')->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id')->select('users.*', 'roles.display_name', 'role_user.*')->get();
 

        return view('Users.Admin.dashboard')->with('data',$rol)->with('usrdata',$usr)->with('usrrol',$userRoles);
       }
        else 
        {  
           $today= new datetime();
          $todays=$today->format('d');  
          $todaymonth=$today->format('m');
          $todayyear=$today->format('Y');
         $usr=Auth::user();
         $totalcustomer=DB::table('customers')->where('user_id' , Auth::user()->userid)->count();
         $totalinvoice=Db::table('invoices')->where(DB::raw("month(created_at)") , $todaymonth)->where(DB::raw("year(created_at)") , $todayyear)->where('user_id' , Auth::user()->userid)->count();
         $totalexpense=Db::table('expenses')->where('user_id' , Auth::user()->userid)->where(DB::raw("year(created_at)") , $todayyear)->where(DB::raw("month(created_at)") , $todaymonth)->SUM('amount');
         $totalpayment=Db::table('payments')->where('user_id' , Auth::user()->userid)->where(DB::raw("year(payment_date)") , $todayyear)->where(DB::raw("month(payment_date)") , $todaymonth)->SUM('totalpayment');
          $todayinvoice=Db::table('invoices')->where(DB::raw("month(created_at)") , $todaymonth)->where(DB::raw("year(created_at)") , $todayyear)->where(DB::raw("day(created_at)") , $todays)->where('user_id' , Auth::user()->userid)->select(DB::raw('COALESCE(SUM(sub_total),0) as invoicesum'))->first();
         $todayexpense=Db::table('expenses')->where('user_id' , Auth::user()->userid)->where(DB::raw("month(created_at)") , $todaymonth)->where(DB::raw("year(created_at)") , $todayyear)->where(DB::raw("day(created_at)") , $todays)->select(DB::raw('COALESCE(SUM(amount),0) as expensesum'))->first();

        $todaypayment=Db::table('payments')->where('user_id' , Auth::user()->userid)->where(DB::raw("month(payment_date)") , $todaymonth)->where(DB::raw("year(payment_date)") , $todayyear)->where(DB::raw("day(payment_date)") , $todays)->select(DB::raw('COALESCE(SUM(totalpayment),0) as paymentsum'))->first();
// echo json_encode($todaypayment);
// die();

         return view('Users.Client.dashboard')
          ->with(compact('usr'))
          ->with(compact('totalcustomer'))
          ->with(compact('totalinvoice'))
          ->with(compact('totalexpense'))
          ->with(compact('totalpayment'))
           ->with(compact('todayinvoice'))
          ->with(compact('todaypayment'))
          ->with(compact('todayexpense'));
         
        }
    }


    public function chartdata(){
        $userid=Auth::user()->userid;
        $query='SELECT date_field,
                IFNULL((SELECT SUM(totalpayment) from payments where payment_date = date_field and user_id =\''.$userid.'\'),0) as PaymentTotal,
                IFNULL((SELECT SUM(grand_total) from invoices where date(invoice_date) = date_field and user_id =\''.$userid.'\'),0) as InvoiceTotal,
                IFNULL((SELECT SUM(amount) from expenses where day(created_at) = day(date_field) and month(created_at) = month(date_field)  and user_id =\''.$userid.'\'),0) as ExpenseTotal
                FROM
                (
                    SELECT
                        MAKEDATE(YEAR(NOW()),1) +
                        INTERVAL (MONTH(NOW())-1) MONTH +
                        INTERVAL daynum DAY date_field
                    FROM
                    (
                        SELECT t*10+u daynum
                        FROM
                            (SELECT 0 t UNION SELECT 1 UNION SELECT 2 UNION SELECT 3) A,
                            (SELECT 0 u UNION SELECT 1 UNION SELECT 2 UNION SELECT 3
                            UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7
                            UNION SELECT 8 UNION SELECT 9) B
                        ORDER BY daynum
                    ) AA
                ) AAA
                WHERE MONTH(date_field) = MONTH(NOW()) ORDER BY 1';
        $results = DB::select($query);

         
         echo json_encode($results);
                   
         

    }


 public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        else {
            $this->create($request->all());
        }
   
           return response()
            ->json([
                'created' => true    
            ]);
        
    }

       protected function validator(array $data)
    {
        return Validator::make($data, [
            
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'address'=>'required|max:255',
            'cin'=>'required|max:255',
            'gst'=>'required|max:255',
            'mobile'=>'required|min:6|numeric',
            'commissionerate'=>'required',
            'pannumber'=>'max:200',
            'password' => 'required|min:6',
            'beneficiaryswift'=>'max:200',
            'beneficiarynum'=>'required|numeric',
            'beneficiary_name'=>'required|max:220',
            'beneficiaryifsc'=>'required|max:10',
            'bankname'=>'required|max:200',
        ]);
    }

  protected function create(array $data)
    {
        $uuid4 = Uuid::uuid4();
        $user= User::create([
            'userid'=> $uuid4->toString(),
            'name' => $data['name'],
            'email' => $data['email'],
            'address'=>$data['address'],
            'cin'=>$data['cin'],
            'gst'=>$data['gst'],
            'mobile'=>$data['mobile'],
            'pannumber'=>$data['pannumber'],
            'commissionerate'=>$data['commissionerate'],
            'beneficiaryswift' =>$data['beneficiaryswift'],
            'beneficiarynum' =>$data['beneficiarynum'],
            'beneficiary_name' =>$data['beneficiary_name'],
            'beneficiaryifsc' =>strtoupper($data['beneficiaryifsc']),
            'bankname' => $data['bankname'],
            'password' => bcrypt($data['password']),
        ]);
      
     DB::table('role_user')->insert([
         'user_id'=>$user->id,
         'role_id'=>'2'
     ]);

      DB::table('taxes')->insert([
         'user_id'=>$user->userid,
         'name'=>'CGST+SGST',
         'tax' => '18'
     ]);
         DB::table('taxes')->insert([
         'user_id'=>$user->userid,
         'name'=>'IGST',
         'tax' => '18'
     ]);

     return $user;
    }

    public function notification(){
      // $usr=DB::table('users')->get();
      $newlead=  Newleads::orderBy('created_at', 'desc')->where('user_id' , Auth::user()->userid)->get();
     $leadcount=  Newleads::orderBy('created_at', 'desc')->where('user_id' , Auth::user()->userid)->count();
      // echo json_encode( $leadcount);
      // die();
      return ($newlead); 
    }

 
}
