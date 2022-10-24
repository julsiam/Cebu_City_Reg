<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\SpouseDeath;


class SpouseDeathController extends Controller
{
    public function create()
    {
        return view('spouseDeathForm');
    }

    public function store(Request $request)
    {
        $status = "Pending";
        $spouseDeathDetails = new SpouseDeath();
        $spouseDeathDetails->sex = $request->get('sex');
        $spouseDeathDetails->fname = $request->get('fname');
        $spouseDeathDetails->mname = $request->get('mname');
        $spouseDeathDetails->lname = $request->get('lname');
        $spouseDeathDetails->idtype = $request->get('idtype');
        $spouseDeathDetails->spousefname = $request->get('spousefname');
        $spouseDeathDetails->spousemname = $request->get('spousemname');
        $spouseDeathDetails->spouselname = $request->get('spouselname');
        $spouseDeathDetails->deathplace = $request->get('deathplace');
        $spouseDeathDetails->lateReg = $request->get('lateReg');
        $spouseDeathDetails->purpose = $request->get('purpose');
        $spouseDeathDetails->phone = $request->get('phone');
        $spouseDeathDetails->status = ($status);
        $spouseDeathDetails->save();
        return redirect('spouseDeathDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

     public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }

    public function showSpouseDeathData($id)
    {
        $spouseDeath = SpouseDeath::find($id);
        return view('statusSpouseDeath', ['spouseDeath'=>$spouseDeath]);
    }

    public function editSpouseDeath(Request $request)
    {
        $spouseDeathDetails=SpouseDeath::find($request->id);
        $spouseDeathDetails->sex = $request->sex;
        $spouseDeathDetails->fname = $request->fname;
        $spouseDeathDetails->mname = $request->mname;
        $spouseDeathDetails->lname = $request->lname;
        $spouseDeathDetails->idtype = $request->idtype;
        $spouseDeathDetails->spousefname = $request->spousefname;
        $spouseDeathDetails->spousemname = $request->spousemname;
        $spouseDeathDetails->spouselname = $request->spouselname;
        $spouseDeathDetails->deathplace = $request->deathplace;
        $spouseDeathDetails->lateReg = $request->lateReg;
        $spouseDeathDetails->purpose = $request->purpose;
        $spouseDeathDetails->phone = $request->phone;
        $spouseDeathDetails->status = $request->status;
        $spouseDeathDetails->save();
        return redirect ('spouseDeathRequest');
    }

}