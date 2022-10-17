<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Appointment extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'appointment'; //collection sa database

    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'email',
        'phone', 
        'address', 
        'firstVisit', 
        'appointmentSubject', 
        'appointmenttDate', 
        'mostPrefTime', 
        'lessPrefTime'
    ];
}
//birthForm and birth index added
