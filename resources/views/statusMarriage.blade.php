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
        <h1>{{ __('Status Update for Marriage Request') }}</h1>
        <div class="container">
            <form action="/updateMarriage" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <input type="hidden" name="id" value="{{ $marriage['id'] }}"> <br>
                        <label for="">Sex:
                            <input type="text" name="sex" readonly value="{{ $marriage['sex'] }}"> <br>
                        </label>
                        <label for="">First Name:
                            <input type="text" name="fname" readonly value="{{ $marriage['fname'] }}"><br>
                        </label>
                        <label for="">Middle Name:
                            <input type="text" name="mname" readonly value="{{ $marriage['mname'] }}"><br>
                        </label>
                        <label for="">Last Name:
                            <input type="text" name="lname" readonly value="{{ $marriage['lname'] }}"><br>
                        </label>
                        <label for="">Birthdate:
                            <input type="text" name="birthdate" readonly value="{{ $marriage['birthdate'] }}"><br>
                        </label>
                        <label for="">Birthplace:
                            <input type="text" name="birthplace" readonly value="{{ $marriage['birthplace'] }}"><br>
                        </label>
                        <label for="">ID Presented:
                            <input type="text" name="idtype" readonly value="{{ $marriage['idtype'] }}"><br>
                        </label>
                        <label for="">Spouse's First Name:
                            <input type="text" name="ffname" readonly value="{{ $marriage['sfname'] }}"><br>
                        </label>
                        <label for="">Spouse's Middle Name:
                            <input type="text" name="fmname" readonly value="{{ $marriage['smname'] }}"><br>
                        </label>
                        <label for="">Spouse's Last Name:
                            <input type="text" name="flname" readonly value="{{ $marriage['slname'] }}"><br>
                        </label>
                        <label for="">Mariage Date:
                            <input type="text" name="marriageDate" readonly
                                value="{{ $marriage['marriageDate'] }}"><br>
                        </label>
                        <label for="">Marriage Place:
                            <input type="text" name="marriageplace" readonly
                                value="{{ $marriage['marriageplace'] }}"><br>
                        </label>
                        <label for="">Purpose:
                            <input type="text" name="purpose" readonly value="{{ $marriage['purpose'] }}"><br>
                        </label>
                        <label for="">Legal Proceedings:
                            <input type="text" name="legalProceedings" readonly
                                value="{{ $marriage['legalProceedings'] }}"><br>
                        </label>
                        <label for="">Phone:
                            <input type="text" name="phone" readonly value="{{ $marriage['phone'] }}"><br>
                        </label>
                        <label for="">Status:
                            <input type="text" name="status" id="status" value="{{ $marriage['status'] }}"><br>
                        </label> <br>
                        <button type="submit">Update</button>
                        <a href="/marriageRequest"><button type="submit" style="background-color:green; color:white">Back</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
