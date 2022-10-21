<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\Birth;


class BirthController extends Controller
{
    public function create()
    {
        return view('birthForm');
    }

    public function store(Request $request)
    {

        $status = "Pending";
        $birthDetails = new Birth();
        $birthDetails->sex = $request->get('sex');
        $birthDetails->fname = $request->get('fname');
        $birthDetails->mname = $request->get('mname');
        $birthDetails->lname = $request->get('lname');
        $birthDetails->birthdate = $request->get('birthdate');
        $birthDetails->birthplace = $request->get('birthplace');
        $birthDetails->idtype = $request->get('idtype');
        $birthDetails->ffname = $request->get('ffname');
        $birthDetails->fmname = $request->get('fmname');
        $birthDetails->flname = $request->get('flname');
        $birthDetails->mfname = $request->get('mfname');
        $birthDetails->mmname = $request->get('mmname');
        $birthDetails->mlname = $request->get('mlname');
        $birthDetails->lateReg = $request->get('lateReg');
        $birthDetails->purpose = $request->get('purpose');
        $birthDetails->phone = $request->get('phone');
        $birthDetails->status = ($status);
        $birthDetails->save();
        return redirect('birthDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

    public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }

    public function showBirthData($id)
    {
        $birth = Birth::find($id);
        return view('statusBirth', ['birth'=>$birth]);
    }

    public function editBirth(Request $request)
    {
        $birthDetails=Birth::find($request->id);
        $birthDetails->sex = $request->sex;
        $birthDetails->fname = $request->fname;
        $birthDetails->mname = $request->mname;
        $birthDetails->lname = $request->lname;
        $birthDetails->birthdate = $request->birthdate;
        $birthDetails->birthplace = $request->birthplace;
        $birthDetails->idtype = $request->idtype;
        $birthDetails->ffname = $request->ffname;
        $birthDetails->fmname = $request->fmname;
        $birthDetails->flname = $request->flname;
        $birthDetails->mfname = $request->mfname;
        $birthDetails->mmname = $request->mmname;
        $birthDetails->mlname = $request->mlname;
        $birthDetails->lateReg = $request->lateReg;
        $birthDetails->purpose = $request->purpose;
        $birthDetails->phone = $request->phone;
        $birthDetails->status = $request->status;
        $birthDetails->save();
        return redirect ('birthRequest');
    }

}
