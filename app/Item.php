<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'client_id', 'user_id', 'item_no',
        'item_size', 'donedate', 'person_name',
        'reference', 'remarks',
        'next_date'
    ];
}
