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
        <h1>{{ __('Status Update for Cenomar Request') }}</h1>
        <form action="/updateCenomar" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="hidden" name="id" value="{{ $cenomar['id'] }}"> <br>
                    <label for="">Sex:
                        <input type="text" name="sex" readonly value="{{ $cenomar['sex'] }}"> <br>
                    </label>
                    <label for="">First Name:
                        <input type="text" name="fname" readonly value="{{ $cenomar['fname'] }}"><br>
                    </label>
                    <label for="">Middle Name:
                        <input type="text" name="mname" readonly value="{{ $cenomar['mname'] }}"><br>
                    </label>
                    <label for="">Last Name:
                        <input type="text" name="lname" readonly value="{{ $cenomar['lname'] }}"><br>
                    </label>
                    <label for="">Birthdate:
                        <input type="text" name="birthdate" readonly value="{{ $cenomar['birthdate'] }}"><br>
                    </label>
                    <label for="">Birthdate:
                        <input type="text" name="birthplace" readonly value="{{ $cenomar['birthplace'] }}"><br>
                    </label>
                    <label for="">ID Presented:
                        <input type="text" name="idtype" readonly value="{{ $cenomar['idtype'] }}"><br>
                    </label>
                    <label for="">Father's First Name:
                        <input type="text" name="ffname" readonly value="{{ $cenomar['ffname'] }}"><br>
                    </label>
                    <label for="">Father's First Name:
                        <input type="text" name="fmname" readonly value="{{ $cenomar['fmname'] }}"><br>
                    </label>
                    <label for="">Father's Last Name:
                        <input type="text" name="flname" readonly value="{{ $cenomar['flname'] }}"><br>
                    </label>
                    <label for="">Mother's First Name:
                        <input type="text" name="mfname" readonly value="{{ $cenomar['mfname'] }}"><br>
                    </label>
                    <label for="">Mother's Middle Name:
                        <input type="text" name="mmname" readonly value="{{ $cenomar['mmname'] }}"><br>
                    </label>
                    <label for="">Mother's Middle Name:
                        <input type="text" name="mlname" readonly value="{{ $cenomar['mlname'] }}"><br>
                    </label>
                    <label for="">Purpose of Request:
                        <input type="text" name="purpose" readonly value="{{ $cenomar['purpose'] }}"><br>
                    </label>
                    <label for="">Email:
                        <input type="text" name="phone" readonly value="{{ $cenomar['phone'] }}"><br>
                    </label>
                    <label for="">Status:
                        <input type="text" name="status" id="status" value="{{ $cenomar['status'] }}"><br>
                    </label><br>
                    <button type="submit">Update</button>
                    <a href="/cenomarRequest"><button type="submit"
                            style="background-color:green; color:white">Back</button></a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
