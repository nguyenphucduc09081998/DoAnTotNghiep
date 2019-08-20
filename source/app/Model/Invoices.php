<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    //
    protected $table ='invoices';
    protected $fillable =['id','customer_id','invoice_status','notes','created_at','updated_at'];
    public $timestamp = true;
    protected $typekey ='integer';
}
