<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class MotherDeath extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'motherDeath'; //collection sa database

    protected $fillable = [
        'sex',
        'fname',
        'mname',
        'lname',
        'idtype', 
        'mfname', 
        'mmname', 
        'mlname', 
        'deathdate', 
        'deathplace', 
        'lateReg', 
        'purpose',
        'phone'
    ];
}
//birthForm and birth index added
