<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanatory extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'sanatories';
    protected $fillable = ['telefon','name','id', 'adres', 'vidi_uslug'];
}
