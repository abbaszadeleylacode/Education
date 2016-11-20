<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sinif extends Model
{
    public $fillable = ['text','ders_cedveli'];

    public function sagird()
    {
        return $this->hasMany('App\sagird');
    }
}
