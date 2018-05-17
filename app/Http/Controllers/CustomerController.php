<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Customer;
use Illuminate\Support\Facades\Storage;


class CustomerController extends Controller
{
    
    public function __construct()
    {

        $this->middleware('auth');
    }


    public function index()
    {
        
        $customers = Customer::orderBy('created_at', 'desc')->where('user_id' , Auth::user()->userid)->get();
         

        return view('customers.index', compact('customers'));
    }

    public function create()
    {
       
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $customerid = Uuid::uuid4();
        $userid=Auth::user()->userid;
       
        $this->validate($request, [
            'customer_name' => 'required|max:255',
            'customer_address' => 'max:255',
            'customer_email' => 'email|max:250', 
            'mobile_no' => 'numeric|min:9'
            
            
        ]);
      
        
        $data = $request->all();
        $data['user_id']=$userid;
        $data['customer_id']=$customerid;
        $customer = Customer::create($data);
        Notify()->flash('Client Successfully Saved.', 'success');
        return response()
            ->json([
                'created' => true,
                'customer_id' => $customer->customer_id
            ]);
       
    }


    public function show($customer_id)
    {
        $customer = Customer::findBycustomeridOrFail($customer_id);
        return view('customers.show', compact('customer'));
    }

    public function edit($customer_id)
    {
        //$customer = DB::table('customers')->where('customer_id', $customer_id)->first();
        //$a= json_encode($customer);
        //return view('customers.edit', $customer);
        $customer = Customer::findBycustomeridOrFail($customer_id); 
        return view('customers.edit', compact('customer'));
    }


    public function update(Request $request, $customer_id)
    {
           // Customer::where('customer_id', $customer_id)->delete();


             $this->validate($request, [
            'customer_name' => 'required|max:255'.$customer_id.',customer_id',
           
            'customer_email' => 'email|max:255',  
            'description' => 'max:255',
            'mobile_no' => 'min:9|numeric'
           
          ]);

        $customer = Customer::findBycustomeridOrFail($customer_id);

            $data = $request->all();
            $customer->update($data);

            Notify()->flash('Client Updated Successfully.', 'success');
        return response()
            ->json([
                'updated' => true,
                'customer_id' => $customer->customer_id
            ]);
    }

    public function destroy($customer_id)
    {
        $customer = Customer::findBycustomeridOrFail($customer_id);
       
       $customer->delete();
        Notify()->flash('Client Deleted Successfully.', 'success');
       
          return response() 
            ->json([
                'deleted' => true
                        
            ]);
        
    }

}


                            
                            