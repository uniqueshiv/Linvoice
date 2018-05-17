<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipdetails extends Model
{
    protected $fillable = [
        'invoice_id', 'shipname', 'shipaddress','shipcontact','gst'
    ];
}