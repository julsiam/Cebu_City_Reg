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
        $businessDetails->incentive = $request->get('incentive');
        $businessDetails->businessAdd = $request->get('businessAdd');
        $businessDetails->postalCode = $request->get('postalCode');
        $businessDetails->businessHotline = $request->get('businessHotline');
        $businessDetails->ownerAdd = $request->get('ownerAdd');
        $businessDetails->ownerPostalCode = $request->get('ownerPostalCode');
        $businessDetails->ownerHotline = $request->get('ownerHotline');
        $businessDetails->contactPerson = $request->get('contactPerson');
        $businessDetails->emergencyContact = $request->get('emergencyContact');
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

    public function showBusinessData($id)
    {
        $businessPermit = BusinessPermit::find($id);
        return view('statusBusinessPermit', ['businessPermit' => $businessPermit]);
    }

    public function editBusiness(Request $request)
    {
        $businessDetails = BusinessPermit::find($request->id);
        $businessDetails->businessType = $request->businessType;
        $businessDetails->dtiNo = $request->dtiNo;
        $businessDetails->paymentMode = $request->paymentMode;
        $businessDetails->applicationDate = $request->applicationDate;
        $businessDetails->tin = $request->tin;
        $businessDetails->ammendFrom = $request->ammendFrom;
        $businessDetails->ammendTo = $request->ammendTo;
        $businessDetails->fname = $request->fname;
        $businessDetails->mname = $request->mname;
        $businessDetails->lname = $request->lname;
        $businessDetails->tradename = $request->tradename;
        $businessDetails->permitOption = $request->permitOption;
        $businessDetails->incentive = $request->incentive;
        $businessDetails->businessAdd = $request->businessAdd;
        $businessDetails->postalCode = $request->postalCode;
        $businessDetails->businessHotline = $request->businessHotline;
        $businessDetails->ownerAdd = $request->ownerAdd;
        $businessDetails->ownerPostalCode = $request->ownerPostalCode;
        $businessDetails->ownerHotline = $request->ownerHotline;
        $businessDetails->contactPerson = $request->contactPerson;
        $businessDetails->emergencyContact = $request->emergencyContact;
        $businessDetails->businessArea = $request->businessArea;
        $businessDetails->employeeTotal = $request->employeeTotal;
        $businessDetails->lessorName = $request->lessorName;
        $businessDetails->lessorAdd = $request->lessorAdd;
        $businessDetails->lessorPhone = $request->lessorPhone;
        $businessDetails->lessorEmail = $request->lessorEmail;
        $businessDetails->monthlyRent = $request->monthlyRent;
        $businessDetails->filledupFile = $request->filledupFile;
        $businessDetails->occupancyFile = $request->occupancyFile;
        $businessDetails->brgyClearanceFile = $request->brgyClearanceFile;
        $businessDetails->sanitaryFile = $request->sanitaryFile;
        $businessDetails->fireSafetyFile = $request->fireSafetyFile;
        $businessDetails->otherFile = $request->otherFile;
        $businessDetails->status = $request->status;
        $businessDetails->save();
        return redirect('businessPermitRequest');
    }
}
