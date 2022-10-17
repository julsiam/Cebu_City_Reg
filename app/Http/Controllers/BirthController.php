<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\Birth;


class BirthController extends Controller
{
    public function create()
    {
        return view('birthForm');
    }

    public function store(Request $request)
    {

        $status = "Pending";
        $birthDetails = new Birth();
        $birthDetails->sex = $request->get('sex');
        $birthDetails->fname = $request->get('fname');
        $birthDetails->mname = $request->get('mname');
        $birthDetails->lname = $request->get('lname');
        $birthDetails->birthdate = $request->get('birthdate');
        $birthDetails->birthplace = $request->get('birthplace');
        $birthDetails->idtype = $request->get('idtype');
        $birthDetails->ffname = $request->get('ffname');
        $birthDetails->fmname = $request->get('fmname');
        $birthDetails->flname = $request->get('flname');
        $birthDetails->mfname = $request->get('mfname');
        $birthDetails->mmname = $request->get('mmname');
        $birthDetails->mlname = $request->get('mlname');
        $birthDetails->lateReg = $request->get('lateReg');
        $birthDetails->purpose = $request->get('purpose');
        $birthDetails->email = $request->get('email');
        $birthDetails->status = ($status);
        $birthDetails->save();
        return redirect('birthDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

    public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }


    // public function edit($id)
    // {
    //     $car = Birth::find($id);
    //     return view('caredit', compact('car', 'id'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $car = Car::find($id);
    //     $car->carcompany = $request->get('carcompany');
    //     $car->model = $request->get('model');
    //     $car->price = $request->get('price');
    //     $car->save();
    //     return redirect('car')->with('success', 'Car has been successfully update');
    // }

    // public function destroy($id)
    // {
    //     $car = Car::find($id);
    //     $car->delete();
    //     return redirect('car')->with('success', 'Car has been  deleted');
    // }




    // public function store(Request $request)
    // {
    //     $car = new Car();
    //     $car->carcompany = $request->get('carcompany');
    //     $car->model = $request->get('model');
    //     $car->price = $request->get('price');
    //     $car-> save();
    //     return redirect('car')->with('success', 'Car has been successfully added');
    // }
    // public function index()
    // {
    //     $cars=Car::all();
    //     return view('carindex',compact('cars'));
    // }
}
