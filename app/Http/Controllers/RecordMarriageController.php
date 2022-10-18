<?php

namespace App\Http\Controllers;

use App\Models\Marriage;
// use App\Models\Marriage;

use Illuminate\Http\Request;

class RecordMarriageController extends Controller
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
        $marriage = Marriage::all();
        return view('marriageRequest', compact('marriage')); //databasename
    }
}
