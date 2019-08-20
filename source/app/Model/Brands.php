<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    //
    protected $table ='brands';
    protected $typekey ='integer';
    public $timestamp = true;
    protected $fillable =['id','brand_name','country','short_description','description','created_at','updated_at'];
}
