<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $table = 'tests';

    protected $fillable=['file_name','file_size','file_path'];
}
