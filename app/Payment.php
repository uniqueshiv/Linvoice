<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payment_method', 'payment_date', 'totalpayment', 'user_id', 'invoice_id' , 'client_id' , 
        'reviews', 'd_d_no','cheque_no', 'payment_id'
    ];

    public function payment()
    {
        return $this->belongsTo(Invoice::class);
    }

   
    public static function findBypaymentidOrFail(
        $payment_id,
        $columns = array('*')
    ) {
        if ( ! is_null($payment= static::wherePaymentId($payment_id)->first($columns))) {
            return $payment;
        }

        throw new ModelNotFoundException;
    }
}
