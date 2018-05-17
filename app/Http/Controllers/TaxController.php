<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\taxes;

class TaxController extends Controller
{

     public function __construct()
    {

        $this->middleware('auth');
    }
    
    public function index()
    {

        $taxes = DB::table('taxes')->where('user_id' , Auth::user()->userid)->get();


 
        return view('taxes.index', compact('taxes'));
        
       
    }

     public function store(Request $request)
    {

        $userid=Auth::user()->userid;
       
        $this->validate($request, [
            'name' => 'required|max:255',
            'tax' => 'required|min:1|numeric'
       
            
        ]);
      
        
        $data = $request->all();
        $data['user_id']=$userid;
        $customer = taxes::create($data);
       
        $taxes = DB::table('taxes')->where('user_id' , Auth::user()->userid)->get();
  Notify()->flash('Tax Saved Successfully.', 'success');
        return view('taxes.index', compact('taxes'));
        
       
    }
     public function show($id)
    {
       
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {


    }

    public function destroy($id)
    {
        $tax = taxes::findOrFail($id);
       
        $tax->delete();
         Notify()->flash('Tax Deleted Successfully.', 'success');
        return redirect()
            ->route('taxes.index');
    }

}
