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
        <h1>{{ __('Status Update for Appointment Request') }}</h1>
        <form action="/updateAppointment" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="hidden" name="id" value="{{ $appointment['id'] }}"> <br>
                    <label for="">First Name:
                        <input type="text" name="fname" readonly value="{{ $appointment['fname'] }}"><br>
                    </label>
                    <label for="">Middle Name:
                        <input type="text" name="mname" readonly value="{{ $appointment['mname'] }}"><br>
                    </label>
                    <label for="">Last Name:
                        <input type="text" name="lname" readonly value="{{ $appointment['lname'] }}"><br>
                    </label>
                    <label for=""> Emai:
                        <input type="text" name="email" readonly value="{{ $appointment['email'] }}"><br>
                    </label>
                    <label for="">Phone:
                        <input type="text" name="phone" readonly value="{{ $appointment['phone'] }}"><br>
                    </label>
                    <label for="">Address:
                        <input type="text" name="address" readonly value="{{ $appointment['address'] }}"><br>
                    </label>
                    <label for=""> First Visit:
                        <input type="text" name="visitOften" readonly value="{{ $appointment['visitOften'] }}"><br>
                    </label>
                    <label for="">Apppointment Subject:
                        <input type="text" name="appointmentSubject" readonly value="{{ $appointment['appointmentSubject'] }}"><br>
                    </label>
                    <label for="">Appointment Date:
                        <input type="text" name="appointmenttDate" readonly value="{{ $appointment['appointmenttDate'] }}"><br>
                    </label>
                    <label for="">Most Prefered Time:
                        <input type="text" name="mostPrefTime" readonly value="{{ $appointment['mostPrefTime'] }}"><br>
                    </label>
                    <label for="">Less Prefered Time:
                        <input type="text" name="lessPrefTime" readonly value="{{ $appointment['lessPrefTime'] }}"><br>
                    </label>
                    <label for="">Status: 
                        <input type="text" name="status" id="status" value="{{ $appointment['status'] }}"><br>
                    </label> <br>
                    <button type="submit">Update</button>
                    <a href="/appointmentRequest"><button type="submit" style="background-color:green; color:white">Back</button></a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
