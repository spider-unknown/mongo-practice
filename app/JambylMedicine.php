<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JambylMedicine extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'medicines_jambyl';
    protected $fillable = ['registering_authoritykz','addresskz','addressru', 'tell', 'regionkz', 'regionru'];
}
