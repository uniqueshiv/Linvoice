<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'vendor_name', 'amount', 'mode',
        'remarks', 'check_no', 'd_d_no', 'user_id','expense_id'
        
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public static function findByexpenseidOrFail(
        $expense_id,
        $columns = array('*')
    )
     {
        if ( ! is_null($expense = static::whereExpenseId($expense_id)->first($columns))) {
            return $expense;
        }

        throw new ModelNotFoundException;
    }
}
