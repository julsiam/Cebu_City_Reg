<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Marriage extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'marriage'; //collection sa database

    protected $fillable = [
        'sex',
        'fname',
        'mname',
        'lname',
        'birthdate', 
        'birthplace', 
        'idtype', 
        'sfname', 
        'smname', 
        'slname', 
        'marriageDate', 
        'marriageplace',  
        'lateReg', 
        'purpose',
        'legalProceedings',
        'email'
    ];
}