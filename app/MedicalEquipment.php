<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\Model;

class MedicalEquipment extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'medical_equipments';
    protected $fillable = ['countmt','namemo','sostoy','datavv','region','raion','namemt'];


}
