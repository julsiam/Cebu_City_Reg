<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\BusinessPermit;


class BusinessController extends Controller
{
    public function create()
    {
        return view('permit');
    }

    public function store(Request $request)
    {

        $status = "Pending";
        $businessDetails = new BusinessPermit();
        $businessDetails->businessType = $request->get('businessType');
        $businessDetails->dtiNo = $request->get('dtiNo');
        $businessDetails->paymentMode = $request->get('paymentMode');
        $businessDetails->applicationDate = $request->get('applicationDate');
        $businessDetails->tin = $request->get('tin');
        $businessDetails->ammendFrom = $request->get('ammendFrom');
        $businessDetails->ammendTo = $request->get('ammendTo');
        $businessDetails->fname = $request->get('fname');
        $businessDetails->mname = $request->get('mname');
        $businessDetails->lname = $request->get('lname');
        $businessDetails->tradeName = $request->get('tradeName');
        $businessDetails->permitOption = $request->get('permitOption');
        $businessDetails->incentive = $request->get('incentive');
        $businessDetails->businessAdd = $request->get('businessAdd');
        $businessDetails->postalCode = $request->get('postalCode');
        $businessDetails->businessHotline = $request->get('businessHotline');
        $businessDetails->businessEmail = $request->get('businessEmail');
        $businessDetails->ownerAdd = $request->get('ownerAdd');
        $businessDetails->ownerPostalCode = $request->get('ownerPostalCode');
        $businessDetails->ownerHotline = $request->get('ownerHotline');
        $businessDetails->contactPerson = $request->get('contactPerson');
        $businessDetails->emergencyContact = $request->get('emergencyContact');
        $businessDetails->contactPersonEmail = $request->get('contactPersonEmail');
        $businessDetails->businessArea = $request->get('businessArea');
        $businessDetails->employeeTotal = $request->get('employeeTotal');
        $businessDetails->lessorName = $request->get('lessorName');
        $businessDetails->lessorAdd = $request->get('lessorAdd');
        $businessDetails->lessorPhone = $request->get('lessorPhone');
        $businessDetails->lessorEmail = $request->get('lessorEmail');
        $businessDetails->monthlyRent = $request->get('monthlyRent');
        $businessDetails->filledupFile = $request->get('filledupFile');
        $businessDetails->occupancyFile = $request->get('occupancyFile');
        $businessDetails->brgyClearanceFile = $request->get('brgyClearanceFile');
        $businessDetails->sanitaryFile = $request->get('sanitaryFile');
        $businessDetails->fireSafetyFile = $request->get('fireSafetyFile');
        $businessDetails->otherFile = $request->get('otherFile');
        $businessDetails->status = ($status);
        $businessDetails->save();
        return redirect('businessDetails'); //ig ka save sa db,, muredirect sa birthDetails nga value nga gidefine sa route nga 'index' ang adtuan
    }

    public function index()
    {
        return view('success'); //mao ni ang index nga ireturn
    }
}