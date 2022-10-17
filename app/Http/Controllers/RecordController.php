<?php

namespace App\Http\Controllers;

use App\Models\Birth;
// use App\Models\Marriage;

use Illuminate\Http\Request;

class RecordController extends Controller
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


    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    {
        $birth = Birth::all();
        return view('home', compact('birth')); //databasename
    }
    
    // public function marriageHome()
    // {
    //     $birth = Marriage::all();
    //     return view('marriageHome', compact('marriage')); //databasename
    // }
}
