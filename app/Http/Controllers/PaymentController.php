<?php

namespace App\Http\Controllers;
use row;
use App;
use PDF;
use Ramsey\Uuid\Uuid;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Invoice;
use App\Payment;
use App\Customer;


class PaymentController extends Controller
{
    

    public function __construct()
    {

        $this->middleware('auth');
    }


    public function index()
    {
        
        $payments = Payment::where('user_id' , Auth::user()->userid)->get();
         
        $customers = Customer::where('user_id' , Auth::user()->userid)->select('customer_name', 'customer_id')->get();
        $invoices = Invoice::where('user_id' , Auth::user()->userid)->get();
        $pay= DB::table('invoices')->rightjoin('payments', 'payments.invoice_id', '=', 'invoices.invoice_id' )->select('invoices.user_id','invoices.client_id','invoices.invoice_no','invoices.grand_total','invoices.invoice_id',DB::raw('COALESCE(SUM(payments.totalpayment),0) as paidamount') ,DB::raw('invoices.grand_total - COALESCE(SUM(payments.totalpayment),0) as amountleft'))->GroupBy('invoices.invoice_id' )->where('invoices.user_id' , Auth::user()->userid)->get();

 
        return view('payments.index' )
        ->with(compact('payments'))
        ->with(compact('customers'))
        ->with(compact('invoices'))
        ->with(compact('pay'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // $customers = DB::table('customers')->where('user_id' , Auth::user()->userid)->get();
   
        $customers= DB::table('customers')->where('customers.user_id' , Auth::user()->userid)->rightjoin('invoices', 'customers.customer_id', '=', 'invoices.client_id')->groupBy('invoices.client_id')->get();
      // echo json_encode($customers);
      //    die();
          return view('payments.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paymentid = Uuid::uuid4();
        $userid=Auth::user()->userid;
       
        $this->validate($request, [
            'reviews' => 'required|max:255',
            'totalpayment' => 'required|min:1|numeric',
            'payment_date' => 'required|date_format:Y-m-d',
            
            
            
        ]);
      
        $data['invoice_id']=$userid;
        $data = $request->all();
        $data['user_id']=$userid;
        $data['payment_id']=$paymentid;
        $payment = Payment::create($data);
        
          Notify()->flash('Payment Saved Successfully.', 'success');
        return response()
            ->json([
                'created' => true,
                'payment_id' => $payment->payment_id
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($payment_id)
    {
        $payment = Payment::findBypaymentidOrFail($payment_id);

       $invoice = Invoice::where('user_id' , Auth::user()->userid);
       $customers = DB::table('customers')->where('user_id' , Auth::user()->userid)->select('customer_id' , 'customer_name')->get();


        return view('payments.edit')
        ->with(compact('invoice'))
        ->with(compact('payment'))
        ->with(compact('customers'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $payment_id)
    {
        $this->validate($request, [
            'reviews' => 'required|max:255',
            'totalpayment' => 'required|min:1|numeric',
            'payment_date' => 'required|date_format:Y-m-d',
            
            
        ]);
        
         $payment =  Payment::findBypaymentidOrFail($payment_id);
          $data = $request->all();
            $payment->update($data);
          Notify()->flash('Payment Updated Successfully.', 'success');
        return response()
            ->json([
                'updated' => true,
                'payment_id' => $payment->payment_id
            ]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($payment_id)
    {
        echo($payment_id);
        die();
         $payment =  Payment::findBypaymentidOrFail($payment_id);   
          $payment->delete();

        return redirect()
            ->route('payments.index');
        
    }

    public function getinvoice($client_id)
    {
        $customers = DB::table('customers')->where('user_id' , Auth::user()->userid)->get();
        $invoices= DB::table('invoices')->leftjoin('payments', 'payments.invoice_id', '=', 'invoices.invoice_id')->select('invoices.client_id','invoices.invoice_no','invoices.grand_total','invoices.invoice_id','invoices.invoice_date', DB::raw('COALESCE(SUM(payments.totalpayment),0) as paidamount') ,DB::raw('invoices.grand_total - COALESCE(SUM(payments.totalpayment),0) as amountleft'))->GroupBy('invoices.invoice_id')->where('invoices.client_id','=', $client_id)->get();


        // $invoices = DB::table('invoices')->where('client_id' , '=' , $client_id)->get();    
         // return view('payments.getinvoice', compact('invoices'));
        return ($invoices);     
    }

     public function getpayment($invoiceno)
    {
        $invoicenum= DB::table('invoices')->where('invoice_no', '=', $invoiceno)->pluck('invoice_id');
        $payments=DB::table('payments')->where('invoice_id', '=' , $invoicenum)->get();
              
      return json_encode($payments);
    }
    
    public function reviewPayment($client_id, $invoice_id)
    {
        
         return view('payments.form');  
         // , array('ids' =>   $client_id, $invoice_id)
    }
    
        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroypayment($payment_id)
    {
       
         $payment =  Payment::findBypaymentidOrFail($payment_id);   
          $payment->delete();
            
//          return redirect()
//            ->route('payments.index');
           Notify()->flash('Payment Deleted Successfully.', 'success');
          return response() 
            ->json([
                'deleted' => true
                        
            ]);
        
        
        
    }
}
