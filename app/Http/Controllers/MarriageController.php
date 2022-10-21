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
        $marriageDetails->purpose = $request->get('purpose');
        $marriageDetails->legalProceedings = $request->get('legalProceedings');
        $marriageDetails->phone = $request->get('phone');
        $marriageDetails->status = ($status);
        $marriageDetails->save();
        return redirect('marriageDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

     public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }

    public function showMarriageData($id)
    {
        $marriage = Marriage::find($id);
        return view('statusMarriage', ['marriage'=>$marriage]);
    }

    public function editMarriage(Request $request)
    {
        $marriageDetails=Marriage::find($request->id);
        $marriageDetails->sex = $request->sex;
        $marriageDetails->fname = $request->fname;
        $marriageDetails->mname = $request->mname;
        $marriageDetails->lname = $request->lname;
        $marriageDetails->birthdate = $request->birthdate;
        $marriageDetails->birthplace = $request->birthplace;
        $marriageDetails->idtype = $request->idtype;
        $marriageDetails->sfname = $request->sfname;
        $marriageDetails->smname = $request->smname;
        $marriageDetails->slname = $request->slname;
        $marriageDetails->marriageDate = $request->marriageDate;
        $marriageDetails->marriageplace = $request->marriageplace;
        $marriageDetails->purpose = $request->purpose;
        $marriageDetails->legalProceedings = $request->legalProceedings;
        $marriageDetails->phone = $request->phone;
        $marriageDetails->status = $request->status;
        $marriageDetails->save();
        return redirect ('marriageRequest');
    }


}