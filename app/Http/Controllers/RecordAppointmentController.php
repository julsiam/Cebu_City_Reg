<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
// use App\Models\Marriage;

use Illuminate\Http\Request;

class RecordAppointmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $appointment = Appointment::all();
        return view('appointmentRequest', compact('appointment')); //databasename
    }

}
