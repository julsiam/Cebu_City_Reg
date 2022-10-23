<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD Tutorial With Example</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        button {
            border: none;
            background-color: #314964;
            color: white;
            padding: 8px;
            margin: 12px;
        }

        #status {
            background-color: greenyellow;
        }

        .wrapper {
            border: 2px solid #314964;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ __('Status Update for Business Permit Request') }}</h1>
        <form action="/updateBusiness" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="hidden" name="id" value="{{ $businessPermit['id'] }}"> <br>
                    <label for=””>Business Type:
                        <input type="text" name="businessType" readonly value="{{ $businessPermit['businessType'] }}"> <br>
                    </label>
                    <label for=””>DTI No.:
                        <input type="text" name="dtiNo" readonly value="{{ $businessPermit['dtiNo'] }}"><br>
                    </label>
                    <label for=””>Payment Mode:
                        <input type="text" name="paymentMode" readonly value="{{ $businessPermit['paymentMode'] }}"><br>
                    </label>
                    <label for=””>Application Date:
                        <input type="text" name="applicationDate" readonly value="{{ $businessPermit['applicationDate'] }}"><br>
                    </label>
                    <label for=””>Tin:
                        <input type="text" name="tin" readonly value="{{ $businessPermit['tin'] }}"><br>
                    </label>
                    <label for=””>Amend From:
                        <input type="text" name="ammendFrom" readonly value="{{ $businessPermit['ammendFrom'] }}"><br>
                    </label>
                    <label for=””>Amend To:
                        <input type="text" name="ammendTo" readonly value="{{ $businessPermit['ammendTo'] }}"><br>
                    </label>
                    <label for=””>First Name:
                        <input type="text" name="fname" readonly value="{{ $businessPermit['fname'] }}"><br>
                    </label>
                    <label for=””>Middle Name:
                        <input type="text" name="mname" readonly value="{{ $businessPermit['mname'] }}"><br>
                    </label>
                    <label for=””>Last Name:
                        <input type="text" name="lname" readonly value="{{ $businessPermit['lname'] }}"><br>
                    </label>
                    <label for=””>Trade Name:
                        <input type="text" name="tradename" readonly value="{{ $businessPermit['tradename'] }}"><br>
                    </label>
                    <label for=””>Permit Option:
                        <input type="text" name="permitOption" readonly value="{{ $businessPermit['permitOption'] }}"><br>
                    </label>
                    <label for=””>Incentive:
                        <input type="text" name="incentive" readonly value="{{ $businessPermit['incentive'] }}"><br>
                    </label>
                    <label for=””>Business Address:
                        <input type="text" name="businessAdd" readonly value="{{ $businessPermit['businessAdd'] }}"><br>
                    </label>
                    <label for=””>Postal Code:
                        <input type="text" name="postalCode" readonly value="{{ $businessPermit['postalCode'] }}"><br>
                    </label>
                    <label for=””>Business Hotline:
                        <input type="text" name="businessHotline" readonly value="{{ $businessPermit['businessHotline'] }}"><br>
                    </label>
                    <label for=””>Business Email:
                        <input type="text" name="businessEmail" readonly value="{{ $businessPermit['businessEmail'] }}"><br>
                    </label>
                    <label for=””>Owner Address:
                        <input type="text" name="ownerAdd" readonly value="{{ $businessPermit['ownerAdd'] }}"><br>
                    </label>
                    <label for=””>Owner Postal Code:
                        <input type="text" name="ownerPostalCode" readonly value="{{ $businessPermit['ownerPostalCode'] }}"><br>
                    </label>
                    <label for=””>Owner Hotline:
                        <input type="text" name="ownerHotline" readonly value="{{ $businessPermit['ownerHotline'] }}"><br>
                    </label>
                    <label for=””>Contact Person:
                        <input type="text" name="contactPerson" readonly value="{{ $businessPermit['contactPerson'] }}"><br>
                    </label>
                    <label for=””>Emergency Contact:
                        <input type="text" name="emergencyContact" readonly value="{{ $businessPermit['emergencyContact'] }}"><br>
                    </label>
                    <label for=””>Contact Person Email:
                        <input type="text" name="contactPersonEmail" readonly value="{{ $businessPermit['contactPersonEmail'] }}"><br>
                    </label>
                    <label for=””>Business Area:
                        <input type="text" name="businessArea" readonly value="{{ $businessPermit['businessArea'] }}"><br>
                    </label>
                    <label for=””>Employee Total:
                        <input type="text" name="employeeTotal" readonly value="{{ $businessPermit['employeeTotal'] }}"><br>
                    </label>
                    <label for=””>Lessor Name:
                        <input type="text" name="lessorName" readonly value="{{ $businessPermit['lessorName'] }}"><br>
                    </label>
                    <label for=””>Lessor Address:
                        <input type="text" name="lessorAdd" readonly value="{{ $businessPermit['lessorAdd'] }}"><br>
                    </label>
                    <label for=””>Lessor Phone:
                        <input type="text" name="lessorPhone" readonly value="{{ $businessPermit['lessorPhone'] }}"><br>
                    </label>
                    <label for=””>Lessor Email:
                        <input type="text" name="lessorEmail" readonly value="{{ $businessPermit['lessorEmail'] }}"><br>
                    </label>
                    <label for=””>Monthly Rent:
                        <input type="text" name="monthlyRent" readonly value="{{ $businessPermit['monthlyRent'] }}"><br>
                    </label>
                    <label for=””>Filled Up File:
                        <input type="text" name="filledupFile" readonly value="{{ $businessPermit['filledupFile'] }}"><br>
                    </label>
                    <label for=””>Occupancy File:
                        <input type="text" name="occupancyFile" readonly value="{{ $businessPermit['occupancyFile'] }}"><br>
                    </label>
                    <label for=””>Barangay Clearance File:
                        <input type="text" name="brgyClearanceFile" readonly value="{{ $businessPermit['brgyClearanceFile'] }}"><br>
                    </label>
                    <label for=””>Sanitary File:
                        <input type="text" name="sanitaryFile" readonly value="{{ $businessPermit['sanitaryFile'] }}"><br>
                    </label>
                    <label for=””>Fire Safety File:
                        <input type="text" name="fireSafetyFile" readonly value="{{ $businessPermit['fireSafetyFile'] }}"><br>
                    </label>
                    <label for=””>Other File:
                        <input type="text" name="otherFile" readonly value="{{ $businessPermit['otherFile'] }}"><br>
                    </label>
                    <label for=””>Status:
                        <input type="text" name="status" id="status" value="{{ $businessPermit['status'] }}"><br>
                    </label> <br>

                    <button type="submit">Update</button>
                    <a href="/businessPermitRequest"><button type="submit" style="background-color:green; color:white">Back</button></a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
