<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_name', 'customer_address', 
        'customer_email', 'description', 'mobile_no', 'gst','user_id', 'customer_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public static function findBycustomeridOrFail(
        $customer_id,
        $columns = array('*')
    )
     {
        if ( ! is_null($customer = static::whereCustomerId($customer_id)->first($columns))) {
            return $customer;
        }

        throw new ModelNotFoundException;
    }
}
