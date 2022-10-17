<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\Scholarship;


class ScholarshipController extends Controller
{
    public function create()
    {
        return view('scholarship');
    }

    public function store(Request $request)
    {

        $status = "Pending";
        $scholarshipDetails = new Scholarship();
        $scholarshipDetails->fname = $request->get('fname');
        $scholarshipDetails->mname = $request->get('mname');
        $scholarshipDetails->lname = $request->get('lname');
        $scholarshipDetails->birthDate = $request->get('birthDate');
        $scholarshipDetails->birthPlace = $request->get('birthPlace');
        $scholarshipDetails->sex = $request->get('sex');
        $scholarshipDetails->civilStatus = $request->get('civilStatus');
        $scholarshipDetails->citizenship = $request->get('citizenship');
        $scholarshipDetails->phone = $request->get('phone');
        $scholarshipDetails->email = $request->get('email');
        $scholarshipDetails->presentAdd = $request->get('presentAdd');
        $scholarshipDetails->zipCode = $request->get('zipCode');
        $scholarshipDetails->schoolSector = $request->get('schoolSector');
        $scholarshipDetails->schoolLastAttendee = $request->get('schoolLastAttendee');
        $scholarshipDetails->schoolAdd = $request->get('schoolAdd');
        $scholarshipDetails->ffname = $request->get('ffname');
        $scholarshipDetails->fatherAddress = $request->get('fatherAddress');
        $scholarshipDetails->fatherPhone = $request->get('fatherPhone');
        $scholarshipDetails->fatherOccupation = $request->get('fatherOccupation');
        $scholarshipDetails->fatherEmployer = $request->get('fatherEmployer');
        $scholarshipDetails->fatherEmployerAdd = $request->get('fatherEmployerAdd');
        $scholarshipDetails->fatherEdu = $request->get('fatherEdu');
        $scholarshipDetails->mfname = $request->get('mfname');
        $scholarshipDetails->motherAdd = $request->get('motherAdd');
        $scholarshipDetails->motherPhone = $request->get('motherPhone');
        $scholarshipDetails->motherOccupation = $request->get('motherOccupation');
        $scholarshipDetails->motherEmployer = $request->get('motherEmployer');
        $scholarshipDetails->motherEmployerAdd = $request->get('motherEmployerAdd');
        $scholarshipDetails->motherEdu = $request->get('motherEdu');
        $scholarshipDetails->siblings = $request->get('siblings');
        $scholarshipDetails->pantawidMember = $request->get('pantawidMember');
        $scholarshipDetails->academicFile = $request->get('academicFile');
        $scholarshipDetails->incomeFile = $request->get('incomeFile');
        $scholarshipDetails->status = ($status);
        $scholarshipDetails->save();
        return redirect('scholarshipDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

    public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }
}