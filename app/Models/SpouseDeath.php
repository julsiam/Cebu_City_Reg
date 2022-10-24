<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class SpouseDeath extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'spouseDeath'; //collection sa database

    protected $fillable = [
        'sex',
        'fname',
        'mname',
        'lname',
        'idtype', 
        'spousefname', 
        'spousemname', 
        'spouselname', 
        'deathdate', 
        'deathplace', 
        'lateReg', 
        'purpose',
        'phone'
    ];
}