<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
    protected $table ='services';
    protected $fillable =['id','service_name','short_description','description','created_at','updated_at'];
    protected $typekey ='integer';
    public $timestamps = true;
}
