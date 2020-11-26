<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanatoryArman extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'arman_sanatory';
    protected $fillable = ['tsena','namerus','namekz', 'id'];
}
