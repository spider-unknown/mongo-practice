<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanatoryKazakhstan extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'kazakhstan_sanatory';
    protected $fillable = ['tsena','namerus','namekz', 'id'];
}
