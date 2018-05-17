<?php

namespace App\Http\Controllers;

use App;
use PDF;
use Ramsey\Uuid\Uuid;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Invoice;
use App\Product;
use App\InvoiceProduct;
use App\Customer;
use App\Payment;
use App\Shipdetails;
use Datetime;
use Illuminate\Support\Facades\Storage;

class InvoiceController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');

  
    }

   

    public function index()

    {
        $invoices = Invoice::orderBy('created_at', 'desc')->where('user_id' , Auth::user()->userid)->get();
       $customers= DB::table('customers')->where('user_id' , Auth::user()->userid)->get();

      return view('invoices.index')->with(compact('invoices'))->with(compact( 'customers'));
   
    }

    public function create()
    {
   
         $contents="";
      
         $invoices = Invoice::orderBy('id', 'desc')->pluck('id')->first();
         $taxes=DB::table('taxes')->where('user_id' , Auth::user()->userid)->get();
         $customers= DB::table('customers')->where('user_id' , Auth::user()->userid)->get();
         $product = Product::orderBy('id', 'desc')->where('user_id' , Auth::user()->userid)->select('hsn_code','name')->get();

        return view('invoices.create')
        ->with(compact('customers'))
        ->with(compact('taxes'))
        ->with(compact('contents'))
         ->with(compact('product'));
    }

    public function store(Request $request)
    {   
      
        $invoiceid = Uuid::uuid4();
        $invoice_id = $invoiceid->toString();
        $userid=Auth::user()->userid;
        $now= new Datetime();
        $invoicelast = Invoice::orderBy('id', 'desc')->pluck('invoice_no')->first();
        $lastnum = (explode('-',$invoicelast));
       if(!empty($invoicelast)){
       $lastnum = (explode('-',$invoicelast));
      $invoicenext1 =($lastnum[1]+1);}
      else{
      $invoicenext1 =1;
      }
          $this->validate($request, [
            'invoice_no' => 'unique:invoices',
            'client_id' => 'required|max:255',
            'invoice_date' => 'required',
            'tax' => 'required|numeric|min:1',
            'products.*.name' => 'required|max:255',
            'products.*.price' => 'required|numeric|min:1',
            'products.*.package' => 'required|max:200',
            'products.*.unit' => 'required|max:200',
            'products.*.qty' => 'required|numeric|min:1',
            'products.*.hsn_code' => 'required|max:255'
            
        ]);
        
        if(!count($request->products)) {
            return response()
            ->json([
                'products_empty' => ['One or more Product is required.']
            ], 422);
        }
      

        $products = collect($request->products)->transform(function($product) {

           
            $product['total'] = round(($product['qty'] * $product['price']),2);
           
            $product['invoice_id'] ='temp invoice';
               return new InvoiceProduct($product);
        
        });
        $client = collect($request->client);
        
        foreach ($products as $p) {
            $p['invoice_id'] = $invoice_id;
           
        }
    $data = $request->except(['products' , 'client']);


        $thisdate= $now->format('Y');
        $username1=Auth::user()->name;
        $username= strtoupper($username1);
        $namestr=substr($username, 0, 3);
        $invoicenext = str_pad($invoicenext1, 4, '0', STR_PAD_LEFT);
        $namenum=$namestr."-".$invoicenext;

        $data['invoice_no']=$namenum;
        $data['invoice_id']= $invoice_id;
        $data['user_id'] = $userid;
        $data['sub_total'] = round($products->sum('total') + $data['fcharges']+ $data['lpcharges']+ $data['insurcharges']+ $data['other']);
   

     $data['grand_total'] = round($data['sub_total'] + (($data['sub_total']*18.00)/100)) ;

        $client['$invoice_id']=$invoice_id;
         if (!empty($client['shipname']) ) {
           DB::table('shipdetails')->insert([
           'invoice_id'=>$invoice_id,
          'shipaddress'=>$client['shipaddress'],
           'shipcontact'=>$client['shipcontact'],
          'shipname'=>$client['shipname'],
           'gst'=>$client['gst']
         ]);
        }


        $invoice = Invoice::create($data);
        $t=time();
  
      
        foreach ($products as $p) {
            
            DB::table('invoice_products')->insert([
            'invoice_id'=>$p->invoice_id,
            'name'=>$p->name,
            'hsn_code'=>$p->hsn_code,
            'package'=>$p->package,
            'unit'=>$p->unit, 
            'qty'=>$p->qty,
            'price'=>$p->price,
            'total'=>$p->total,
            'created_at'=>$now,
            ]);

    }
         Notify()->flash('Invoice Created Successfully.', 'success');
        return response()
            ->json([
                'created' => true,
                 
                // 'hsn_code' => $p->hsn_code
                'invoice_id' => $invoice->invoice_id
            ]);
    }

    public function show($invoice_id)
    {
    
        $invoice = Invoice::findByinvoiceidOrFail($invoice_id);
        $shipdetails = DB::table('shipdetails')->where('invoice_id', $invoice_id)->select('shipaddress','shipname','shipcontact')->first();
        $custship =DB::table('customers')->where('customer_id', '=', $invoice->client_id)->select('customer_address as shipaddress','customer_name as shipname','mobile_no as shipcontact')->first();
       $cust1=DB::table('customers')->where('customer_id', '=', $invoice->client_id)->first();
        $invoicelast = Invoice::orderBy('id', 'desc')->pluck('invoice_no')->first();
       //$lastnum = (explode('-',$invoicelast));

       
        $products = InvoiceProduct::findByinvoiceidOrFail($invoice_id);
     
       if(!empty($shipdetails)) {
        $cust = (object) array_merge((array) $shipdetails, (array) $cust1);
       }
       else{
         $cust =  (object) array_merge((array) $custship, (array)$cust1);
       }
  
        $gst = round($invoice->sub_total*(9/100),2);
         $igst = round($invoice->sub_total*(18/100),2);
          $rgst = round($invoice->sub_total*(18/100));

        $user=Auth::user()->where('userid' , Auth::user()->userid)->first();
        $invoice['products']=$products;
         $tax=InvoiceProduct::findByinvoiceidOrFail($invoice_id)->SUM('tax');
         return view('invoices.show')
        ->with(compact('invoice'))
        ->with(compact('cust'))
        ->with(compact('tax'))
        ->with(compact('user'))
        ->with(compact('invoicelast'))
        ->with(compact('igst'))
        ->with(compact('gst'))
        ->with(compact('shipdetails'))
        ->with(compact('rgst'));
    }

    public function edit($invoice_id)
    {
        $shipdetails = Shipdetails::where('invoice_id', $invoice_id)->select('shipaddress','shipname','shipcontact','gst')->first();
        $invoice = Invoice::findByinvoiceidOrFail($invoice_id);
        $contents = DB::table('customers')->where('customer_id' , $invoice->client_id)->select('customer_id')->first();
        $products = InvoiceProduct::findByinvoiceidOrFail($invoice_id);
        $customers = DB::table('customers')->where('user_id' , Auth::user()->userid)->get();
        $shipdetailcust = DB::table('customers')->where('customer_id' , $invoice->client_id)->select('customer_address as shipaddress','customer_name as shipname','mobile_no as shipcontact','gst as gst')->first();
        $product = Product::orderBy('id', 'desc')->where('user_id' , Auth::user()->userid)->select('hsn_code','name')->get();    

       $taxes=DB::table('taxes')->where('user_id' , Auth::user()->userid)->get();

        $invoice['products']=$products;
if(count($shipdetails)){

      $invoice['client']=$shipdetails;
}
else{

$invoice['client']=$shipdetailcust;
}

        return view('invoices.edit')
        ->with(compact('invoice'))
        ->with(compact('customers'))
        ->with(compact('taxes'))
         ->with(compact('contents'))
        ->with(compact('product'));
    }


    public function update(Request $request, $invoice_id)
    {
        $userid=Auth::user()->userid;
        $updatedate= new Datetime();
        $this->validate($request, [
            
            'client_id' => 'required|max:255',
            'invoice_date' => 'required',
            'tax' => 'required',
            'products.*.name' => 'required|max:255',
            'products.*.price' => 'required|numeric|min:1',
            'products.*.qty' => 'required|numeric|min:1',
            'products.*.hsn_code' => 'required',
            'products.*.package' => 'required|max:200',
            'products.*.unit' => 'required|max:200'
           ]);
  // $errors = $validator->errors();
        $invoice = Invoice::findByinvoiceidOrFail($invoice_id);
        $products = collect($request->products)->transform(function($product) {
         
                $product['total'] = round(($product['qty'] * $product['price']),2);
                
            $product['invoice_id'] ='temp invoice';
               return new InvoiceProduct($product);
        
        });
        $client = collect($request->client);
       
        foreach ($products as $p) {
            $p['invoice_id'] = $invoice_id;
           
        }
        // $prod = $request->client[0];
       
        
      if(!count($request->products)) { 
            return response()
            ->json([
                'products_empty' => ['One or more Product is required.']
            ], 422);
        }

        $data = $request->except(['products' , 'client']);
        $data['sub_total'] = round($products->sum('total') + $data['fcharges']+ $data['lpcharges']+ $data['insurcharges']+ $data['other']);
        $data['grand_total'] = round($data['sub_total'] + (($data['sub_total']*18.00)/100)) ;

       if(!empty($request->$client["shipaddress"])) { 
          return response()
            ->json([
                'thiserror' => $abc,
                'invoice_id' => $invoice->invoice_id
            ]);
}
        
        	if(!empty($client["shipaddress"])){
        		Shipdetails::where('invoice_id', $invoice_id)->delete();
        		DB::table('shipdetails')->insert([
             		'invoice_id'=>$invoice_id,
          		'shipaddress'=>$client["shipaddress"],
           		'shipcontact'=>$client["shipcontact"],
          		'shipname'=>$client["shipname"],
                        'gst'=>$client["gst"]
        		 ]);
        	}
     
     
        
        $invoice->update($data);

        InvoiceProduct::where('invoice_id', $invoice->invoice_id)->delete();
        Payment::where('invoice_id', $invoice->invoice_id)->delete();

           
        foreach ($products as $p) {
           
        
            DB::table('invoice_products')->insert([
            'invoice_id'=>$p->invoice_id,
            'name'=>$p->name,
            'qty'=>$p->qty,
            'hsn_code'=>$p->hsn_code,
            'package'=>$p->package,
            'unit'=>$p->unit,
            'price'=>$p->price,
            'total'=>$p->total,
            'updated_at'=>$updatedate
            ]);

            
           $pro= DB::table('products')->select('hsn_code','name')->where('user_id' , '=' ,$userid)->where('hsn_code','=', $p->hsn_code)->orWhere('name','=', $p->name)->count();
            
            if(!$pro)
                {
                DB::table('products')->insert([
                'user_id'=>$userid,
                'name'=>$p->name,
                'hsn_code'=>$p->hsn_code

            ]);
        }
           
            
           
            
        }
         Notify()->flash('Invoice Updated Successfully.', 'success');
        return response()
            ->json([
                'updated' => true,
                'invoice_id' => $invoice->invoice_id
            ]);
    }

    public function destroy($invoice_id)
    {
        $invoice = Invoice::findByinvoiceidOrFail($invoice_id);

        InvoiceProduct::where('invoice_id', $invoice->invoice_id)
            ->delete();

        $invoice->delete();
         Notify()->flash('Invoice Deleted Successfully.', 'success');
         return redirect()
            ->route('invoices.index');
       
    } 
    
    public function printToPDF($invoice_id)
    {
       
 $pdf = App::make('dompdf.wrapper');

        
       $invoice = Invoice::findByinvoiceidOrFail($invoice_id);
       $shipdetails = DB::table('shipdetails')->where('invoice_id', $invoice_id)->select('shipaddress','shipname','shipcontact','gst')->first();
        $customers=DB::table('customers')->where('customer_id', '=', $invoice->client_id)->first();
         $user=Auth::user()->where('userid' , Auth::user()->userid)->first();
        $products = InvoiceProduct::findByinvoiceidOrFail($invoice_id);

        $amount= DB::table('invoices')->leftjoin('payments', 'payments.invoice_id', '=', 'invoices.invoice_id')->select('invoices.invoice_id', DB::raw('COALESCE(SUM(payments.totalpayment),0) as paidamount') , DB::raw('invoices.grand_total - COALESCE(SUM(payments.totalpayment),0) as amountleft'))->GroupBy('invoices.invoice_id')->where('invoices.invoice_id', '=', $invoice_id)->first();
        $productcount = InvoiceProduct::orderBy('id', 'desc')->where('invoice_id','=' ,$invoice_id)->get()->count();
        $gst = round($invoice->sub_total*(9/100),2);
        $igst = round($invoice->sub_total*(18/100),2);
           $rgst = round($invoice->sub_total*(18/100));

          if(count($shipdetails)){
   $shipname = ($shipdetails->shipname);
   $shipaddress= ($shipdetails->shipaddress);
   $shipcontact= ($shipdetails->shipcontact);
   $shipgst= ($shipdetails->gst);
 
}

else{
   $shipname  = ($customers->customer_name);
   $shipaddress= ($customers->customer_address);
   $shipcontact= ($customers->mobile_no);
   $shipgst= ($customers->gst);
} 
    
//echo ($shipname); die();    
        $invoice['products']=$products;
        $invoice['customer']=$customers;
        $invoice['user']=$user;
        $invoice['amount']=$amount;
        //echo $gst;

 $invoice['gst']=$gst;
 $invoice['igst']=$igst;
 $invoice['productcount']=$productcount;
 $invoice['shipname']=$shipname ;
 $invoice['shipaddress']=$shipaddress;
 $invoice['shipcontact']=$shipcontact;
 $invoice['shipgst']=$shipgst;
 $invoice['rgst']=$rgst;

        $pdf = PDF::loadview('invoices.invoice', compact('invoice'));
      
//echo json_encode($invoice);
//die();

      return $pdf->stream();
        // return PDF::loadFile('invoices.invoice', compact('invoice'))->download($invoice->invoice_no.'.pdf')->download($invoice->invoice_no.'.pdf');
        // return View('invoices.invoice', compact('invoice'));
        //return $pdf->download($invoice->invoice_no.'.pdf'); 
    }

    public function createleadinvoice()
    {
         $contents = Storage::get('file.txt');
         $invoices = Invoice::orderBy('id', 'desc')->pluck('id')->first();
         $taxes=DB::table('taxes')->where('user_id' , Auth::user()->userid)->get();
         $customers= DB::table('customers')->where('user_id' , Auth::user()->userid)->get();
         $invoicenext1 =($invoices + 1);
         $invoicenext = str_pad($invoicenext1, 4, '0', STR_PAD_LEFT);
       
        return view('invoices.create')
        ->with(compact('customers'))
         ->with(compact('invoicenext'))
        ->with(compact('taxes'))
         ->with(compact('contents'));
    }

    public function autoComplete(Request $request) {
    $query = $request->get('term','');
 

        $products=Product::where('name','LIKE','%'.$query.'%')->get();
        
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->name,'id'=>$product->id, 'hsn_code'=>$product->hsn_code);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
            }
public function autoCompleteT(Request $request) {
    $query = $request->get('term','');
 

        $products=Invoice::where('transmode','LIKE','%'.$query.'%')->select('transmode')->distinct()->get();
        
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->transmode);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
            }

public function autoCompleteV(Request $request) {
    $query = $request->get('term','');
 

        $products=Invoice::where('veh_no','LIKE','%'.$query.'%')->select('veh_no')->distinct()->get();
        
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->veh_no);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
            }
 public function autoCompletePos(Request $request) {
    $query = $request->get('term','');
 

        $products=Invoice::where('p_of_sup','LIKE','%'.$query.'%')->select('p_of_sup')->distinct()->get();
        
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->p_of_sup);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
            }


 public function productsshow()
    {
     //$products = Product::orderBy('name', 'desc')->get();
     //$products=  DB::table('products')->where('user_id' , Auth::user()->userid)->get();
     $products=Product::all();
     return view('products.index', compact('products'));
    }
   
public function createproduct(){

	return view('products.create');
}

public function saveproduct(Request $request){
      $this->validate($request, [
	    'name' => 'required|min:4',
	    'hsn_code' => 'required|min:5',
	]);
	
        $userid=Auth::user()->userid;
    	$data['name'] = $request->input('name');
	$data['hsn_code'] = $request->input('hsn_code');
	$data['user_id'] = $userid;
	
	
      //RefUsers::create($data);
     Product::create($data);
      $response = array(
          'status' => 'success',
          'msg' =>'Successfully save product'
          
      );
      Notify()->flash('Product Created Successfully.', 'success');
         return redirect()
            ->back();
     // return response()->json($response); 
   }
   
public function deleteproduct(Request $req){
        $id=$req->id;
        $product = Product::findOrFail($id);
        $product->destroy($id);
       
	/*$product= new Product;
	$product=Product::find($req);
	$product->delete($req);*/
	Notify()->flash('Product Deleted Successfully.', 'success');
         return redirect()
            ->back();
 	// $id = input::get('id');
 	//echo $req->id;
 	//echo "iddi ="+$idi;
        /*Product::where('id', $request->id)
            ->delete();

        //$invoice->delete();
         Notify()->flash('Invoice Deleted Successfully.', 'success');
         return redirect()
            ->route('invoices.products');
            
	$Users = new UserModel;        // Totally useless line
	$Users = UserModel::find($id); // Can chain this line with the next one
	$Users->delete($id);
	*/
	// print_r($request);
       
}

}