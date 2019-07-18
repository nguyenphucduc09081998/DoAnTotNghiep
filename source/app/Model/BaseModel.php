<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $created_time
 * @property string $updated_time
 */
abstract class BaseModel extends Model
{
    public $timestamps = false;
}
