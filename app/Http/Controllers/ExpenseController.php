<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Expense;

class ExpenseController extends Controller
{
    
    public function __construct()
    {

        $this->middleware('auth');
    }


    public function index()
    {
       
        $expenses = Expense::orderBy('created_at', 'desc')->where('user_id' , Auth::user()->userid) ->get();

        return view('expenses.index', compact('expenses'));
        
    }


    public function create()
    {
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        $expenseid = Uuid::uuid4();
        $userid=Auth::user()->userid;

        $this->validate($request, [
            'vendor_name' => 'required|max:255',
            'amount' => 'required|numeric|min:1',
            'remarks' => 'required|max:255',
            'mode' =>'required'
           
        ]);
      
        
        $data = $request->all();
        $data['user_id']=$userid;
        $data['expense_id']=$expenseid;
        $expense = Expense::create($data);
         Notify()->flash('Expenses Saved Successfully.', 'success');
        return response()
            ->json([
                'created' => true,
                'expense_id' => $expense->expense_id
            ]);
    }

    public function show($expense_id)
    {
        $expense = Expense::findByexpenseidOrFail($expense_id);
        return view('expenses.show', compact('expense'));
    }

    public function edit($expense_id)
    {
        $expense = Expense::findByexpenseidOrFail($expense_id); 
        return ($expense);
    }

    public function update(Request $request, $expense_id)
    {
        $this->validate($request, [
             'vendor_name' => 'required|max:255'.$expense_id.',expense_id',
            'amount' => 'required|numeric|min:1',
            'remarks' => 'required|max:255',
             'mode' =>'required'
           
            
          ]);

       $expense = Expense::findByexpenseidOrFail($expense_id);

        $data = $request->all();
        $expense->update($data);
         Notify()->flash('Expenses Updated Successfully.', 'success');
        return response()
            ->json([
                'updated' => true,
                'expense_id' => $expense->expense_id
            ]);
    }

    public function destroy($expense_id)
    {
        $expense = Expense::findByexpenseidOrFail($expense_id);
        $expense->delete();
         Notify()->flash('Expenses Deleted Successfully.', 'success');
           return response() 
            ->json([
                'deleted' => true
                        
            ]);
    }
}
