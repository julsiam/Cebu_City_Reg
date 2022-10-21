<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Birth extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'birth'; //collection sa database

    protected $fillable = [
        'sex',
        'fname',
        'mname',
        'lname',
        'birthdate', 
        'birthplace', 
        'idtype', 
        'ffname', 
        'fmname', 
        'flname', 
        'mfname', 
        'mmname', 
        'mlname', 
        'lateReg', 
        'purpose',
        'phone'
    ];
}
//birthForm and birth index added
