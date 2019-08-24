<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class InvoicesItems extends Model
{
    //
    protected $table ='invoicesitems';
    protected $fillable =['id', 'invoice_id','product_id','quantity','created_at','updated_at'];
    protected $typekey ='integer';
    public $timestamps = true;
}
