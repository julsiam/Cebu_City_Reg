<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\Cenomar;


class CenomarController extends Controller
{
    public function create()
    {
        return view('cenomarForm');
    }

    public function store(Request $request)
    {

        $status = "Pending";
        $cenomarDetails = new Cenomar();
        $cenomarDetails->sex = $request->get('sex');
        $cenomarDetails->fname = $request->get('fname');
        $cenomarDetails->mname = $request->get('mname');
        $cenomarDetails->lname = $request->get('lname');
        $cenomarDetails->birthdate = $request->get('birthdate');
        $cenomarDetails->birthplace = $request->get('birthplace');
        $cenomarDetails->idtype = $request->get('idtype');
        $cenomarDetails->ffname = $request->get('ffname');
        $cenomarDetails->fmname = $request->get('fmname');
        $cenomarDetails->flname = $request->get('flname');
        $cenomarDetails->mfname = $request->get('mfname');
        $cenomarDetails->mmname = $request->get('mmname');
        $cenomarDetails->mlname = $request->get('mlname');
        $cenomarDetails->purpose = $request->get('purpose');
        $cenomarDetails->email = $request->get('email');
        $cenomarDetails->status = ($status);
        $cenomarDetails->save();
        return redirect('cenomarDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

    public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }
}
