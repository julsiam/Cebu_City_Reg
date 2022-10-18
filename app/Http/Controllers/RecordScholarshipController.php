<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;

use Illuminate\Http\Request;

class RecordScholarshipController extends Controller
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
        $scholarship = Scholarship::all();
        return view('scholarshipRequest', compact('scholarship')); //databasename
    }
}
