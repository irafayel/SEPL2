<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testtable extends Model
{
    protected $table = 'testtable';

    protected $fillable=['image'];
}
