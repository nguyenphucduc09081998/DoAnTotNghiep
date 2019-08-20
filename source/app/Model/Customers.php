<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
    protected $table ='customers';
    protected $fillable =['id','customer_name','customer_mail','customer_address','customer_phone','created_at','updated_at'];
    public $typekey ='integer';
    protected $timestamp = true;
}
