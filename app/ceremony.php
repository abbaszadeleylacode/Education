<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ceremony extends Model
{
    protected $fillable = ['name', 'about','sinif_id','time'];
}
