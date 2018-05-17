<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taxes extends Model
{
    protected $fillable = [
        'name', 'tax', 'user_id'
    ];
}
