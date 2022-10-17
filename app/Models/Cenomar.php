<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cenomar extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'cenomar'; //collection sa database

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
        'purpose',
        'email'
    ];
}
//birthForm and birth index added
