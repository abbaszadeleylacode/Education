<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muellim extends Model
{
    protected $fillable = ['name', 'surname','ders_id','avatar','email','password','phone'];
}
