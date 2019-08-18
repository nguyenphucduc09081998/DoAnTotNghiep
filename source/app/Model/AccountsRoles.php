<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AccountsRoles extends Model
{
    //
    protected $table ='accountsroles';
    protected $typekey = 'integer';
    protected $fillable =['id','account_id','role_id','created_at','updated_at'];
    protected $timestamp = true;
}
