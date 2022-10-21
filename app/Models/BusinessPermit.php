<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class BusinessPermit extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'businessPermit'; //collection sa database

    protected $fillable = [
        'businessType',
        'dtiNo',
        'paymentMode',
        'applicationDate', 
        'tin', 
        'ammendFrom',
        'ammendTo', 
        'fname', 
        'mname', 
        'lname', 
        'tradeName', 
        'permitOption', 
        'incentive', 
        'businessAdd', 
        'postalCode',
        'businessHotline',
        'ownerAdd',
        'ownerPostalCode',
        'ownerHotline', 
        'contactPerson', 
        'emergencyContact',
        'businessArea', 
        'employeeTotal', 
        'lessorName', 
        'lessorAdd', 
        'lessorPhone', 
        'lessorEmail', 
        'monthlyRent', 
        'filledupFile',
        'occupancyFile',
        'brgyClearanceFile',
        'sanitaryFile', 
        'fireSafetyFile',
        'otherFile',
    ];
}
//birthForm and birth index added
