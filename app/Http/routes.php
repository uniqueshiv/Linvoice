<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	if(!(Auth::guest()))
	{
		if (Auth::user()->hasRole(['Owner', 'Admin'])){
          $rol=DB::table('roles')->get();
            $usr=DB::table('users')->get();
                
            $userRoles=DB::table('users')->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')->select('users.*', 'roles.display_name', 'role_user.*')->get();
            Notify()->flash('Logged In Successfully.', 'success');
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
// echo json_encode($todayinvoice);
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
	else{
    return view('auth.login');
	}
});


Route::post('apply/upload', 'ApplyController@upload');

Route::post('apply/logoload', 'ApplyController@logoload');


Route::get('/dashboard', 'UserController@form');
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/register', 'UserController@index');

Route::post('register', 'UserController@Register');

Route::get('setting', 'UserController@sett');

Route::get('chartdata', 'UserController@chartdata')->name('chartdata');

Route::get('Updaterole', 'UserController@Updaterole');

Route::resource('invoices', 'InvoiceController');


Route::resource('customers', 'CustomerController');

route::resource('taxes', 'TaxController');

Route::get('printToPDF/{invoice_id}', 'InvoiceController@printToPDF')->name('printToPDF');


Route::get('destroypayment/{payment_id}', 'PaymentController@destroypayment');
Route::get('destroyclient/{customer_id}', 'CustomerController@destroy');
Route::get('destroyinvoice/{invoice_id}', 'InvoiceController@destroy');
Route::get('destroyexpense/{expense_id}', 'ExpenseController@destroy');
// Route::get('destroylead/{lead_id}', 'LeadController@destroy');
Route::get('destroyitem/{id}', 'LeadController@destroyitem');


Route::resource('payments', 'PaymentController');

Route::get('/getpayment/{invoiceno}', 'PaymentController@getpayment');

Route::get('/getinvoice/{client_id}', 'PaymentController@getinvoice');
// Route::get('reviewPayment/{client_id}/{invoice_id}', 'PaymentController@reviewPayment');

Route::resource('expenses', 'ExpenseController');

// Route::get('/createleadinvoice', 'InvoiceController@createleadinvoice');



// Route::get('/tankdetail', 'LeadController@tankdetail');
// Route::get('/tankdetail/{id}', 'LeadController@edittankdetail');
// Route::post('/tankdetail/', 'LeadController@savetankdetail');
// Route::put('/tankdetail/{id}', 'LeadController@updatetankdetail');

Route::get('searchajax',array('as'=>'searchajax','uses'=>'InvoiceController@autoComplete'));
Route::get('searchv',array('as'=>'searchv','uses'=>'InvoiceController@autoCompleteV'));
Route::get('searchtransport',array('as'=>'searchtransport','uses'=>'InvoiceController@autoCompleteT'));
Route::get('searchpos',array('as'=>'searchpos','uses'=>'InvoiceController@autoCompletePos'));
// Route::get('/invoices/lead/{client_id}', 'InvoiceController@createleadinvoice');

Route::get('products', 'InvoiceController@productsshow');

Route::get('destroyproduct', 'InvoiceController@deleteproduct');
Route::get('saveproduct','InvoiceController@saveproduct');