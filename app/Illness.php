<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Illness extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'illnesses';
    protected $fillable = ['abs_chilso','region','id'];
}
