<?php

namespace App\Http\Controllers;

use App\Models\Cenomar;
// use App\Models\Marriage;

use Illuminate\Http\Request;

class RecordCenomarController extends Controller
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
        $cenomar = Cenomar::all();
        return view('cenomarRequest', compact('cenomar')); //databasename
    }
}
