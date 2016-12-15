<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class valideynler extends Model
{
    protected $fillable = ['name','surname', 'email','password','phone'];
}
