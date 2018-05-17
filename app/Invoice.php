<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_no', 'transmode', 'veh_no','p_of_sup','numinwords','taxinwords','date_of_sup','invoice_date', 'fcharges','lpcharges','insurcharges','other', 'tax','tax_other',
        'title', 'sub_total', 'discount',
        'grand_total', 'client_id',
        'user_id', 'invoice_id'
    ];

    public function products()
    {
        return $this->hasMany(InvoiceProduct::class);
    }
     public function user()
    {
        return $this->belongsTo(User::class);   
    }
    
    public static function findByinvoiceidOrFail(
        $invoice_id,
        $columns = array('*')
    ) {
        if ( ! is_null($invoice = static::whereInvoiceId($invoice_id)->first($columns))) {
            return $invoice;
        }

        throw new ModelNotFoundException;
    }
}
