<?php

namespace App\Http\Controllers;

use App\Models\Suggestions;
// use App\Models\Marriage;

use Illuminate\Http\Request;

class RecordSuggestionsController extends Controller
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
        $suggestions = Suggestions::all();
        return view('suggestionsRequest', compact('suggestions')); //databasename
    }

}
