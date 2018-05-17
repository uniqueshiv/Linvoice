<?php

namespace App;

use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $fillable = [
        'userid', 'name', 'address','mobile','cin','commissionerate' ,'gst' , 'pannumber' , 'logo', 'email', 'password', 'bankname',  'beneficiarynum',  'beneficiary_name', 'beneficiaryifsc', 'beneficiaryswift'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


     public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
