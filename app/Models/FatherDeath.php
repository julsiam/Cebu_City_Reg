<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class FatherDeath extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'fatherDeath'; //collection sa database

    protected $fillable = [
        'sex',
        'fname',
        'mname',
        'lname',
        'idtype', 
        'ffname', 
        'fmname', 
        'flname', 
        'deathdate', 
        'deathplace', 
        'lateReg', 
        'purpose',
        'phone'
    ];
}
//birthForm and birth index added
