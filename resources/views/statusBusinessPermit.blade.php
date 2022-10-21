<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD Tutorial With Example</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Edit Status for Birth Request</h2><br />
        <div class="container">
        </div>
        <form action="/updateBusiness" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="hidden" name="id" value="{{ $businessPermit['id'] }}"> <br>
                    <input type="text" name="businessType" readonly value="{{ $businessPermit['businessType'] }}"> <br>
                    <input type="text" name="dtiNo" readonly value="{{ $businessPermit['dtiNo'] }}"><br>
                    <input type="text" name="paymentMode" readonly value="{{ $businessPermit['paymentMode'] }}"><br>
                    <input type="text" name="applicationDate" readonly value="{{ $businessPermit['applicationDate'] }}"><br>
                    <input type="text" name="tin" readonly value="{{ $businessPermit['tin'] }}"><br>
                    <input type="text" name="ammendFrom" readonly value="{{ $businessPermit['ammendFrom'] }}"><br>
                    <input type="text" name="ammendTo" readonly value="{{ $businessPermit['ammendTo'] }}"><br>
                    <input type="text" name="fname" readonly value="{{ $businessPermit['fname'] }}"><br>
                    <input type="text" name="mname" readonly value="{{ $businessPermit['mname'] }}"><br>
                    <input type="text" name="lname" readonly value="{{ $businessPermit['lname'] }}"><br>
                    <input type="text" name="tradename" readonly value="{{ $businessPermit['tradename'] }}"><br>
                    <input type="text" name="permitOption" readonly value="{{ $businessPermit['permitOption'] }}"><br>
                    <input type="text" name="incentive" readonly value="{{ $businessPermit['incentive'] }}"><br>
                    <input type="text" name="businessAdd" readonly value="{{ $businessPermit['businessAdd'] }}"><br>
                    <input type="text" name="postalCode" readonly value="{{ $businessPermit['postalCode'] }}"><br>
                    <input type="text" name="businessHotline" readonly  value="{{ $businessPermit['businessHotline'] }}"><br>
                    <input type="text" name="businessEmail" readonly value="{{ $businessPermit['businessEmail'] }}"><br>
                    <input type="text" name="ownerAdd" readonly value="{{ $businessPermit['ownerAdd'] }}"><br>
                    <input type="text" name="ownerPostalCode" readonly value="{{ $businessPermit['ownerPostalCode'] }}"><br>
                    <input type="text" name="ownerHotline" readonly value="{{ $businessPermit['ownerHotline'] }}"><br>
                    <input type="text" name="contactPerson" readonly value="{{ $businessPermit['contactPerson'] }}"><br>
                    <input type="text" name="emergencyContact" readonly value="{{ $businessPermit['emergencyContact'] }}"><br>
                    <input type="text" name="contactPersonEmail" readonly value="{{ $businessPermit['contactPersonEmail'] }}"><br>
                    <input type="text" name="businessArea" readonly value="{{ $businessPermit['businessArea'] }}"><br>
                    <input type="text" name="employeeTotal" readonly value="{{ $businessPermit['employeeTotal'] }}"><br>
                    <input type="text" name="lessorName" readonly value="{{ $businessPermit['lessorName'] }}"><br>
                    <input type="text" name="lessorAdd" readonly value="{{ $businessPermit['lessorAdd'] }}"><br>
                    <input type="text" name="lessorPhone" readonly value="{{ $businessPermit['lessorPhone'] }}"><br>
                    <input type="text" name="lessorEmail" readonly value="{{ $businessPermit['lessorEmail'] }}"><br>
                    <input type="text" name="monthlyRent" readonly value="{{ $businessPermit['monthlyRent'] }}"><br>
                    <input type="text" name="filledupFile" readonly value="{{ $businessPermit['filledupFile'] }}"><br>
                    <input type="text" name="occupancyFile" readonly value="{{ $businessPermit['occupancyFile'] }}"><br>
                    <input type="text" name="brgyClearanceFile" readonly value="{{ $businessPermit['brgyClearanceFile'] }}"><br>
                    <input type="text" name="sanitaryFile" readonly value="{{ $businessPermit['sanitaryFile'] }}"><br>
                    <input type="text" name="fireSafetyFile" readonly value="{{ $businessPermit['fireSafetyFile'] }}"><br>
                    <input type="text" name="otherFile" readonly value="{{ $businessPermit['otherFile'] }}"><br>
                    <input type="text" name="status" value="{{ $businessPermit['status'] }}"><br>
                    <button type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
