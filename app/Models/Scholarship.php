<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Scholarship extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'scholarship'; //collection sa database

    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'birthDate', 
        'birthPlace', 
        'sex',
        'civilStatus', 
        'citizenship', 
        'phone', 
        'presentAdd', 
        'zipCode', 
        'schoolSector', 
        'schoolLastAttendee', 
        'schoolAdd',
        'ffname',
        'fatherAddress',
        'fatherPhone',
        'fatherOccupation',
        'fatherEmployer', 
        'fatherEmployerAdd', 
        'fatherEdu',
        'mfname', 
        'motherAdd', 
        'motherPhone', 
        'motherOccupation', 
        'motherEmployer', 
        'motherEmployerAdd', 
        'motherEdu', 
        'siblings', 
        'pantawidMember',
        'academicFile',
        'incomeFile'
    ];
}
//birthForm and birth index added
