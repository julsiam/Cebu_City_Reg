<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;


class AppointmentController extends Controller
{
    public function create()
    {
        return view('appointment');
    }

    public function store(Request $request)
    {

        $status = "Pending";
        $appointmentDetails = new Appointment();
        $appointmentDetails->fname = $request->get('fname');
        $appointmentDetails->mname = $request->get('mname');
        $appointmentDetails->lname = $request->get('lname');
        $appointmentDetails->email = $request->get('email');
        $appointmentDetails->phone = $request->get('phone');
        $appointmentDetails->address = $request->get('address');
        $appointmentDetails->firstVisit = $request->get('firstVisit');
        $appointmentDetails->appointmentSubject = $request->get('appointmentSubject');
        $appointmentDetails->appointmenttDate = $request->get('appointmenttDate');
        $appointmentDetails->mostPrefTime = $request->get('mostPrefTime');
        $appointmentDetails->lessPrefTime = $request->get('lessPrefTime');
        $appointmentDetails->status = ($status);
        $appointmentDetails->save();
        return redirect('appointmentDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

    public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }
}
