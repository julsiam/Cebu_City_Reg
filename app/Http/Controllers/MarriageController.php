<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\Marriage;


class MarriageController extends Controller
{
    public function create()
    {
        return view('marriageForm');
    }

    public function store(Request $request)
    {
        $status = "Pending";
        $marriageDetails = new Marriage();
        $marriageDetails->sex = $request->get('sex');
        $marriageDetails->fname = $request->get('fname');
        $marriageDetails->mname = $request->get('mname');
        $marriageDetails->lname = $request->get('lname');
        $marriageDetails->birthdate = $request->get('birthdate');
        $marriageDetails->birthplace = $request->get('birthplace');
        $marriageDetails->idtype = $request->get('idtype');
        $marriageDetails->sfname = $request->get('sfname');
        $marriageDetails->smname = $request->get('smname');
        $marriageDetails->slname = $request->get('slname');
        $marriageDetails->marriageDate = $request->get('marriageDate');
        $marriageDetails->marriageplace = $request->get('marriageplace');
        $marriageDetails->lateReg = $request->get('lateReg');
        $marriageDetails->purpose = $request->get('purpose');
        $marriageDetails->legalProceedings = $request->get('legalProceedings');
        $marriageDetails->email = $request->get('email');
        $marriageDetails->status = ($status);
        $marriageDetails->save();
        return redirect('marriageDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

     public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }

}