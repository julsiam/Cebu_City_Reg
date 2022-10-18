<?php

namespace App\Http\Controllers;

use App\Models\FatherDeath;

use Illuminate\Http\Request;

class RecordFatherDeathController extends Controller
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
        $fatherDeath = FatherDeath::all();
        return view('fatherDeathRequest', compact('fatherDeath')); //databasename
    }
}
