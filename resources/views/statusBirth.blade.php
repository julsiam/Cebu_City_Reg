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
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ __('Status Update for Birth Request') }}</h1>
        <form action="/updateBirth" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="hidden" name="id" value="{{ $birth['id'] }}"> <br>
                    <label for=""> Sex:
                        <input type="text" name="sex" readonly value="{{ $birth['sex'] }}"> <br>
                    </label>
                    <label for="">First Name:
                        <input type="text" name="fname" readonly value="{{ $birth['fname'] }}"><br>
                    </label>
                    <label for="">Middle Name:
                        <input type="text" name="mname" readonly value="{{ $birth['mname'] }}"><br>
                    </label>
                    <label for="">Last Name:
                        <input type="text" name="lname" readonly value="{{ $birth['lname'] }}"><br>
                    </label>
                    <label for="">Birthdate:
                        <input type="text" name="birthdate" readonly value="{{ $birth['birthdate'] }}"><br>
                    </label>
                    <label for="">Birth Place:
                        <input type="text" name="birthplace" readonly value="{{ $birth['birthplace'] }}"><br>
                    </label>
                    <label for="">ID Presented:
                        <input type="text" name="idtype" readonly value="{{ $birth['idtype'] }}"><br>
                    </label>
                    <label for="">Father's First Name:
                        <input type="text" name="ffname" readonly value="{{ $birth['ffname'] }}"><br>
                    </label>
                    <label for="">Ftaher's Middle Name:
                        <input type="text" name="fmname" readonly value="{{ $birth['fmname'] }}"><br>
                    </label>
                    <label for="">Father's Last Name:
                        <input type="text" name="flname" readonly value="{{ $birth['flname'] }}"><br>
                    </label>
                    <label for="">Mother's First Name:
                        <input type="text" name="mfname" readonly value="{{ $birth['mfname'] }}"><br>
                    </label>
                    <label for="">Mother's Midde Name:
                        <input type="text" name="mmname" readonly value="{{ $birth['mmname'] }}"><br>
                    </label>
                    <label for="">Mothe's Last Name:
                        <input type="text" name="mlname" readonly value="{{ $birth['mlname'] }}"><br>
                    </label>
                    <label for="">Late Reg:
                        <input type="text" name="lateReg" readonly value="{{ $birth['lateReg'] }}"><br>
                    </label>
                    <label for="">Purpose of Request:
                        <input type="text" name="purpose" readonly value="{{ $birth['purpose'] }}"><br>
                    </label>
                    <label for="">Phone:
                        <input type="text" name="phone" readonly value="{{ $birth['phone'] }}"><br>
                    </label>
                    <label for="">Status:
                        <input type="text" name="status" id="status" value="{{ $birth['status'] }}"><br>
                    </label> <br>
                    <button type="submit">Update</button>
                    <a href="/birthRequest"><button type="submit"
                            style="background-color:green; color:white">Back</button></a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
