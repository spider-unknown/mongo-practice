<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\Model;

class Sanatory extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'sanatories';
    protected $fillable = ['telefon','name','id', 'adres', 'vidi_uslug'];
}
