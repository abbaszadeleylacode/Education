<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidates extends Model
{
    protected $fillable = ['name', 'surname', 'ata_adi', 'age', 'sinif_id', 'city','address','passport_no','photo','email','password','phone'];
}
