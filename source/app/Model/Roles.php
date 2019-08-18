<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
    protected $table = 'roles'; // name table
    protected $fillable =['di','role_name','del_flg','view_menu_name','created_at','updated_at']; // fill get
    protected $keyType ='integer'; // type primary key 
   public $timestamps = true;
}
