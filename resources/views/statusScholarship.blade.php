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
        <form action="/updateScholarship" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="hidden" name="id" value="{{ $scholarship['id'] }}"> <br>
                    <input type="text" name="fname" readonly value="{{ $scholarship['fname'] }}"> <br>
                    <input type="text" name="mname" readonly value="{{ $scholarship['mname'] }}"><br>
                    <input type="text" name="lname" readonly value="{{ $scholarship['lname'] }}"><br>
                    <input type="text" name="birthDate" readonly value="{{ $scholarship['birthDate'] }}"><br>
                    <input type="text" name="birthPlace" readonly value="{{ $scholarship['birthPlace'] }}"><br>
                    <input type="text" name="sex" readonly value="{{ $scholarship['sex'] }}"><br>
                    <input type="text" name="civilStatus" readonly value="{{ $scholarship['civilStatus'] }}"><br>
                    <input type="text" name="citizenship" readonly value="{{ $scholarship['citizenship'] }}"><br>
                    <input type="text" name="phone" readonly value="{{ $scholarship['phone'] }}"><br>
                    <input type="text" name="presentAdd" readonly value="{{ $scholarship['presentAdd'] }}"><br>
                    <input type="text" name="zipCode" readonly value="{{ $scholarship['zipCode'] }}"><br>
                    <input type="text" name="schoolSector" readonly value="{{ $scholarship['schoolSector'] }}"><br>
                    <input type="text" name="schoolLastAttendee" readonly value="{{ $scholarship['schoolLastAttendee'] }}"><br>
                    <input type="text" name="schoolAdd" readonly readonly value="{{ $scholarship['schoolAdd'] }}"><br>
                    <input type="text" name="ffname" readonly value="{{ $scholarship['ffname'] }}"><br>
                    <input type="text" name="fatherAddress" readonly value="{{ $scholarship['fatherAddress'] }}"><br>
                    <input type="text" name="fatherPhone" readonly value="{{ $scholarship['fatherPhone'] }}"><br>
                    <input type="text" name="fatherOccupation" readonly value="{{ $scholarship['fatherOccupation'] }}"><br>
                    <input type="text" name="fatherEmployer" readonly value="{{ $scholarship['fatherEmployer'] }}"><br>
                    <input type="text" name="fatherEmployerAdd" readonly value="{{ $scholarship['fatherEmployerAdd'] }}"><br>
                    <input type="text" name="fatherEdu" readonly value="{{ $scholarship['fatherEdu'] }}"><br>
                    <input type="text" name="mfname" readonly value="{{ $scholarship['mfname'] }}"><br>
                    <input type="text" name="motherAdd" readonly value="{{ $scholarship['motherAdd'] }}"><br>
                    <input type="text" name="motherPhone" readonly value="{{ $scholarship['motherPhone'] }}"><br>
                    <input type="text" name="motherOccupation" readonly value="{{ $scholarship['ffname'] }}"><br>
                    <input type="text" name="motherEmployer" readonly value="{{ $scholarship['motherEmployer'] }}"><br>
                    <input type="text" name="motherEmployerAdd" readonly value="{{ $scholarship['motherEmployerAdd'] }}"><br>
                    <input type="text" name="motherEdu" readonly value="{{ $scholarship['motherEdu'] }}"><br>
                    <input type="text" name="siblings" readonly value="{{ $scholarship['siblings'] }}"><br>
                    <input type="text" name="pantawidMember" readonly value="{{ $scholarship['pantawidMember'] }}"><br>
                    <input type="text" name="academicFile" readonly value="{{ $scholarship['academicFile'] }}"><br>
                    <input type="text" name="incomeFile" readonly value="{{ $scholarship['incomeFile'] }}"><br>
                    <input type="text" name="status"  value="{{ $scholarship['status'] }}"><br>
                    <button type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
