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
        $cenomarDetails->phone = $request->get('phone');
        $cenomarDetails->status = ($status);
        $cenomarDetails->save();
        return redirect('cenomarDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

    public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }

    public function showCenomarData($id)
    {
        $cenomar = Cenomar::find($id);
        return view('statusCenomar', ['cenomar'=>$cenomar]);
    }

    public function editCenomar(Request $request)
    {
        $cenomarDetails=Cenomar::find($request->id);
        $cenomarDetails->sex = $request->sex;
        $cenomarDetails->fname = $request->fname;
        $cenomarDetails->mname = $request->mname;
        $cenomarDetails->lname = $request->lname;
        $cenomarDetails->birthdate = $request->birthdate;
        $cenomarDetails->birthplace = $request->birthplace;
        $cenomarDetails->idtype = $request->idtype;
        $cenomarDetails->ffname = $request->ffname;
        $cenomarDetails->fmname = $request->fmname;
        $cenomarDetails->flname = $request->flname;
        $cenomarDetails->mfname = $request->mfname;
        $cenomarDetails->mmname = $request->mmname;
        $cenomarDetails->mlname = $request->mlname;
        $cenomarDetails->purpose = $request->purpose;
        $cenomarDetails->phone = $request->phone;
        $cenomarDetails->status = $request->status;
        $cenomarDetails->save();
        return redirect ('cenomarRequest');
    }

}
