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

        <h1>{{_("Status Update for Scholarship Requests")}}</h1>
        <form action="/updateScholarship" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="hidden" name="id" value="{{ $scholarship['id'] }}"> <br>
                    <label for=””>First Name:
                        <input type="text" name="fname" readonly value="{{ $scholarship['fname'] }}"> <br>
                    </label>
                    <label for=””>Middle Name:
                        <input type="text" name="mname" readonly value="{{ $scholarship['mname'] }}"><br>
                    </label>
                    <label for=””>Last Name:
                        <input type="text" name="lname" readonly value="{{ $scholarship['lname'] }}"><br>
                    </label>
                    <label for=””>Birth Date:
                        <input type="text" name="birthDate" readonly value="{{ $scholarship['birthDate'] }}"><br>
                    </label>
                    <label for=””>Birth Place:
                        <input type="text" name="birthPlace" readonly value="{{ $scholarship['birthPlace'] }}"><br>
                    </label>
                    <label for=””Sex:>
                        <input type="text" name="sex" readonly value="{{ $scholarship['sex'] }}"><br>
                    </label>
                    <label for=””>Civil Status:
                        <input type="text" name="civilStatus" readonly value="{{ $scholarship['civilStatus'] }}"><br>
                    </label>
                    <label for=””>Citizenship:
                        <input type="text" name="citizenship" readonly value="{{ $scholarship['citizenship'] }}"><br>
                    </label>
                    <label for=””>Phone:
                        <input type="text" name="phone" readonly value="{{ $scholarship['phone'] }}"><br>
                    </label>
                    <label for=””>Present Address:
                        <input type="text" name="presentAdd" readonly value="{{ $scholarship['presentAdd'] }}"><br>
                    </label>
                    <label for=””>Zip Code:
                        <input type="text" name="zipCode" readonly value="{{ $scholarship['zipCode'] }}"><br>
                    </label>
                    <label for=””>School Sector:
                        <input type="text" name="schoolSector" readonly value="{{ $scholarship['schoolSector'] }}"><br>
                    </label>
                    <label for=””>School Last Attendee:
                        <input type="text" name="schoolLastAttendee" readonly value="{{ $scholarship['schoolLastAttendee'] }}"><br>
                    </label>
                    <label for=””>School Address:
                        <input type="text" name="schoolAdd" readonly readonly value="{{ $scholarship['schoolAdd'] }}"><br>
                    </label>
                    <label for=””>Father First Name:
                        <input type="text" name="ffname" readonly value="{{ $scholarship['ffname'] }}"><br>
                    </label>
                    <label for=””>Father Address:
                        <input type="text" name="fatherAddress" readonly  value="{{ $scholarship['fatherAddress'] }}"><br>
                    </label>
                    <label for=””>Father Phone:
                        <input type="text" name="fatherPhone" readonly  value="{{ $scholarship['fatherPhone'] }}"><br>
                    </label>
                    <label for=””>Father Occupation:
                        <input type="text" name="fatherOccupation" readonly  value="{{ $scholarship['fatherOccupation'] }}"><br>
                    </label>
                    <label for=””>Father Employer:
                        <input type="text" name="fatherEmployer" readonly  value="{{ $scholarship['fatherEmployer'] }}"><br>
                    </label>
                    <label for=””>Father Employer Address:
                        <input type="text" name="fatherEmployerAdd" readonly  value="{{ $scholarship['fatherEmployerAdd'] }}"><br>
                    </label>
                    <label for=””>Father Education:
                        <input type="text" name="fatherEdu" readonly value="{{ $scholarship['fatherEdu'] }}"><br>
                    </label>
                    <label for=””>Mother First Name:
                        <input type="text" name="mfname" readonly value="{{ $scholarship['mfname'] }}"><br>
                    </label>
                    <label for=””>Mother Address:
                        <input type="text" name="motherAdd" readonly value="{{ $scholarship['motherAdd'] }}"><br>
                    </label>
                    <label for=””>Mother Phone:
                        <input type="text" name="motherPhone" readonly  value="{{ $scholarship['motherPhone'] }}"><br>
                    </label>
                    <label for=””>Mother Occupation:
                        <input type="text" name="motherOccupation" readonly value="{{ $scholarship['motherOccupation'] }}"><br>
                    </label>
                    <label for=””>Mother Employer:
                        <input type="text" name="motherEmployer" readonly value="{{ $scholarship['motherEmployer'] }}"><br>
                    </label>
                    <label for=””>Mother Employer Address:
                        <input type="text" name="motherEmployerAdd" readonly value="{{ $scholarship['motherEmployerAdd'] }}"><br>
                    </label>
                    <label for=””>Mother Education:
                        <input type="text" name="motherEdu" readonly value="{{ $scholarship['motherEdu'] }}"><br>
                    </label>
                    <label for=””>Siblings:
                        <input type="text" name="siblings" readonly value="{{ $scholarship['siblings'] }}"><br>
                    </label>
                    <label for=””>Pantawid Pamilya Pilipino Program Member:
                        <input type="text" name="pantawidMember" readonly value="{{ $scholarship['pantawidMember'] }}"><br>
                    </label>
                    <label for=””>Academic File:
                        <input type="text" name="academicFile" readonly value="{{ $scholarship['academicFile'] }}"><br>
                    </label>
                    <label for=””>Income File:
                        <input type="text" name="incomeFile" readonly value="{{ $scholarship['incomeFile'] }}"><br>
                    </label>
                    <label for=””>Status:
                        <input type="text" name="status" id="status" value="{{ $scholarship['status'] }}"><br>
                    </label> <br>
                    
                    <button type="submit">Update</button>
                    <a href="/fatherDeathRequest"><button type="submit" style="background-color:green; color:white">Back</button></a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
