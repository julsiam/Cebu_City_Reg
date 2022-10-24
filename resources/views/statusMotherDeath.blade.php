<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cebu Registration</title>
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
        <h1>{{ __('Status Update for Mother Death Certificate Request') }}</h1>
        <form action="/updateMotherDeath" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="hidden" name="id" value="{{ $motherDeath['id'] }}">
                    <label for=””>Sex:
                        <input type="" name="sex" readonly value="{{ $motherDeath['sex'] }}">
                    </label>
                    <label for=””>First Name:
                        <input type="text" name="fname" readonly value="{{ $motherDeath['fname'] }}">
                    </label>
                    <label for=””>Middle Name:
                        <input type="text" name="mname" readonly value="{{ $motherDeath['mname'] }}">
                    </label>
                    <label for=””>Last Name:
                        <input type="text" name="lname" readonly value="{{ $motherDeath['lname'] }}">
                    </label>
                    <label for=””>ID Type:
                        <input type="text" name="idtype" readonly value="{{ $motherDeath['idtype'] }}">
                    </label>
                    <label for=””>Mother's First Name:
                        <input type="text" name="mfname" readonly value="{{ $motherDeath['mfname'] }}">
                    </label>
                    <label for=””>Mother's Middle Name:
                        <input type="text" name="mmname" readonly value="{{ $motherDeath['mmname'] }}">
                    </label>
                    <label for=””>Mother's Last Name:
                        <input type="text" name="mlname" readonly value="{{ $motherDeath['mlname'] }}">
                    </label>
                    <label for=””>Place of Death:
                        <input type="text" name="deathplace" readonly value="{{ $motherDeath['deathplace'] }}">
                    </label>
                    <label for=””>Late Registration:
                        <input type="text" name="lateReg" readonly value="{{ $motherDeath['lateReg'] }}">
                    </label>
                    <label for=””>Purpose:
                        <input type="text" name="purpose" readonly value="{{ $motherDeath['purpose'] }}">
                    </label>
                    <label for=””>Email:
                        <input type="text" name="email" readonly value="{{ $motherDeath['email'] }}">
                    </label>
                    <label for=””>Status:
                        <input type="text" name="status" id="status" value="{{ $motherDeath['status'] }}">
                    </label> <br>
                    <button type="submit">Update</button>
                    <a href="/motherDeathRequest"><button type="submit" style="background-color:green; color:white">Back</button></a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
