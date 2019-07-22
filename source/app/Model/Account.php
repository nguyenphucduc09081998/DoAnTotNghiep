<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class Account extends Model
{
    protected $table = 'account';
    public $timestamps = false;
    protected $keyType = 'integer';
    protected $fillable = ['a_user', 'a_email', 'a_pass' ];
}
