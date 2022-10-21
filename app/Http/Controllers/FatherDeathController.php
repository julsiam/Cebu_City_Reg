<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\FatherDeath;


class FatherDeathController extends Controller
{
    public function create()
    {
        return view('fatherDeathForm');
    }

    public function store(Request $request)
    {
        $status = "Pending";
        $fatherDeathDetails = new FatherDeath();
        $fatherDeathDetails->sex = $request->get('sex');
        $fatherDeathDetails->fname = $request->get('fname');
        $fatherDeathDetails->mname = $request->get('mname');
        $fatherDeathDetails->lname = $request->get('lname');
        $fatherDeathDetails->idtype = $request->get('idtype');
        $fatherDeathDetails->ffname = $request->get('ffname');
        $fatherDeathDetails->fmname = $request->get('fmname');
        $fatherDeathDetails->flname = $request->get('flname');
        $fatherDeathDetails->deathplace = $request->get('deathplace');
        $fatherDeathDetails->lateReg = $request->get('lateReg');
        $fatherDeathDetails->purpose = $request->get('purpose');
        $fatherDeathDetails->phone = $request->get('phone');
        $fatherDeathDetails->status = ($status);
        $fatherDeathDetails->save();
        return redirect('fatherDeathDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

     public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }

    public function showFatherDeathData($id)
    {
        $fatherDeath = FatherDeath::find($id);
        return view('statusFatherDeath', ['fatherDeath'=>$fatherDeath]);
    }

    public function editFatherDeath(Request $request)
    {
        $fatherDeathDetails=FatherDeath::find($request->id);
        $fatherDeathDetails->sex = $request->sex;
        $fatherDeathDetails->fname = $request->fname;
        $fatherDeathDetails->mname = $request->mname;
        $fatherDeathDetails->lname = $request->lname;
        $fatherDeathDetails->idtype = $request->idtype;
        $fatherDeathDetails->ffname = $request->ffname;
        $fatherDeathDetails->fmname = $request->fmname;
        $fatherDeathDetails->flname = $request->flname;
        $fatherDeathDetails->deathplace = $request->deathplace;
        $fatherDeathDetails->lateReg = $request->lateReg;
        $fatherDeathDetails->purpose = $request->purpose;
        $fatherDeathDetails->phone = $request->phone;
        $fatherDeathDetails->status = $request->status;
        $fatherDeathDetails->save();
        return redirect ('fatherDeathRequest');
    }

}