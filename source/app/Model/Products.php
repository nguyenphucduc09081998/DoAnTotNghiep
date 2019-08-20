<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table ='products';
    protected $fillable =['id','product_name','brand_id','short_description','description','created_at','updated_at'];
    public $timestamp = true;
    protected $typekey ='integer';
}
