<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Suggestions extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'suggestions'; //collection sa database

    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'email',
        'suggestionType', 
        'suggestionDetails', 
    ];
}
//birthForm and birth index added
