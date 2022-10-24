<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\MotherDeath;


class MotherDeathController extends Controller
{
    public function create()
    {
        return view('motherDeathForm');
    }

    public function store(Request $request)
    {
        $status = "Pending";
        $motherDeathDetails = new MotherDeath();
        $motherDeathDetails->sex = $request->get('sex');
        $motherDeathDetails->fname = $request->get('fname');
        $motherDeathDetails->mname = $request->get('mname');
        $motherDeathDetails->lname = $request->get('lname');
        $motherDeathDetails->idtype = $request->get('idtype');
        $motherDeathDetails->mfname = $request->get('mfname');
        $motherDeathDetails->mmname = $request->get('mmname');
        $motherDeathDetails->mlname = $request->get('mlname');
        $motherDeathDetails->deathplace = $request->get('deathplace');
        $motherDeathDetails->lateReg = $request->get('lateReg');
        $motherDeathDetails->purpose = $request->get('purpose');
        $motherDeathDetails->phone = $request->get('phone');
        $motherDeathDetails->status = ($status);
        $motherDeathDetails->save();
        return redirect('motherDeathDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

     public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }

    public function showMotherDeathData($id)
    {
        $motherDeath = MotherDeath::find($id);
        return view('statusMotherDeath', ['motherDeath'=>$motherDeath]);
    }

    public function editMotherDeath(Request $request)
    {
        $motherDeathDetails=MotherDeath::find($request->id);
        $motherDeathDetails->sex = $request->sex;
        $motherDeathDetails->fname = $request->fname;
        $motherDeathDetails->mname = $request->mname;
        $motherDeathDetails->lname = $request->lname;
        $motherDeathDetails->idtype = $request->idtype;
        $motherDeathDetails->mfname = $request->mfname;
        $motherDeathDetails->mmname = $request->mmname;
        $motherDeathDetails->mlname = $request->mlname;
        $motherDeathDetails->deathplace = $request->deathplace;
        $motherDeathDetails->lateReg = $request->lateReg;
        $motherDeathDetails->purpose = $request->purpose;
        $motherDeathDetails->phone = $request->phone;
        $motherDeathDetails->status = $request->status;
        $motherDeathDetails->save();
        return redirect ('motherDeathRequest');
    }

}