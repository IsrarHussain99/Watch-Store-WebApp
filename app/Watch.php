<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Watch extends Model
{
    use SoftDeletes;
    //
    //protected $softDelete = true;
}
