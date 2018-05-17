<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceProduct extends Model
{
    protected $fillable = [
        'name', 'hsn_code', 'price', 'package', 'unit', 'qty', 'total', 'invoice_id' 
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
    
    public static function findByinvoiceidOrFail(
        $invoice_id,
        $columns = array('*')
    ) {
        if ( ! is_null($invoice_products = static::whereInvoiceId($invoice_id)->get($columns))) {
            return $invoice_products;
        }

        throw new ModelNotFoundException;
    }
}
