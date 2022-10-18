<?php

namespace App\Http\Controllers;

use App\Models\BusinessPermit;
// use App\Models\Marriage;

use Illuminate\Http\Request;

class RecordBusinessController extends Controller
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
        $businessPermit = BusinessPermit::all();
        return view('businessPermitRequest', compact('businessPermit')); //databasename
    }

}
