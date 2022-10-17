<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\Suggestions;


class SuggestionsController extends Controller
{
    public function create()
    {
        return view('suggestions');
    }

    public function store(Request $request)
    {

        $suggestionsDetails = new Suggestions();
        $suggestionsDetails->fname = $request->get('fname');
        $suggestionsDetails->mname = $request->get('mname');
        $suggestionsDetails->lname = $request->get('lname');
        $suggestionsDetails->email = $request->get('email');
        $suggestionsDetails->suggestionType = $request->get('suggestionType');
        $suggestionsDetails->suggestionDetails = $request->get('suggestionDetails');
        $suggestionsDetails->save();
        return redirect('suggestionsDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

    public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }
}