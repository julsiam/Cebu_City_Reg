<?php

namespace App\Http\Controllers;

use App\Models\Birth;
// use App\Models\Marriage;

use Illuminate\Http\Request;

class RecordBirthController extends Controller
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
        $birth = Birth::all();
        return view('birthRequest', compact('birth')); //databasename
    }

}
