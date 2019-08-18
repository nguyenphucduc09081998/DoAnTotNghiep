<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    //
    protected $table ='accounts';
    protected $typekey = 'integer';
    public $timestamp = true;
    protected $fillable =['id','username','userpassword','email','gender','address','created_at','updated_at'];
}
