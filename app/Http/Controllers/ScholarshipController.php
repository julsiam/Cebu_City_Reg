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

    public function showScholarshipData($id)
    {
        $scholarship = Scholarship::find($id);
        return view('statusScholarship', ['scholarship' => $scholarship]);
    }

    public function editScholarship(Request $request)
    {
        $scholarshipDetails = Scholarship::find($request->id);
        $scholarshipDetails->fname = $request->fname;
        $scholarshipDetails->mname = $request->mname;
        $scholarshipDetails->lname = $request->lname;
        $scholarshipDetails->birthdate = $request->birthdate;
        $scholarshipDetails->birthplace = $request->birthplace;
        $scholarshipDetails->sex = $request->sex;
        $scholarshipDetails->civilStatus = $request->civilStatus;
        $scholarshipDetails->citizenship = $request->citizenship;
        $scholarshipDetails->phone = $request->phone;
        $scholarshipDetails->presentAdd = $request->presentAdd;
        $scholarshipDetails->zipCode = $request->zipCode;
        $scholarshipDetails->schoolSector = $request->schoolSector;
        $scholarshipDetails->schoolLastAttendee = $request->schoolLastAttendee;
        $scholarshipDetails->schoolAdd = $request->schoolAdd;
        $scholarshipDetails->ffname = $request->ffname;
        $scholarshipDetails->fatherAddress = $request->fatherAddress;
        $scholarshipDetails->fatherPhone = $request->fatherPhone;
        $scholarshipDetails->fatherOccupation = $request->fatherOccupation;
        $scholarshipDetails->fatherEmployer = $request->fatherEmployer;
        $scholarshipDetails->fatherEmployerAdd = $request->fatherEmployerAdd;
        $scholarshipDetails->fatherEdu = $request->fatherEdu;
        $scholarshipDetails->mfname = $request->mfname;
        $scholarshipDetails->motherAdd = $request->motherAdd;
        $scholarshipDetails->motherPhone = $request->motherPhone;
        $scholarshipDetails->motherOccupation = $request->motherOccupation;
        $scholarshipDetails->motherEmployer = $request->motherEmployer;
        $scholarshipDetails->motherEmployerAdd = $request->motherEmployerAdd;
        $scholarshipDetails->motherEdu = $request->motherEdu;
        $scholarshipDetails->siblings = $request->siblings;
        $scholarshipDetails->pantawidMember = $request->pantawidMember;
        $scholarshipDetails->academicFile = $request->academicFile;
        $scholarshipDetails->incomeFile = $request->incomeFile;
        $scholarshipDetails->status = $request->status;
        $scholarshipDetails->save();
        return redirect('scholarshipRequest');
    }
}
