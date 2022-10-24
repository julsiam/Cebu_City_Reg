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
        <h1>{{ __('Status Update for Spouse Death Certificate Request') }}</h1>
        <form action="/updateSpouseDeath" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="hidden" name="id" value="{{ $spouseDeath['id'] }}">
                    <label for=””>Sex:
                        <input type="" name="sex" readonly value="{{ $spouseDeath['sex'] }}">
                    </label>
                    <label for=””>First Name:
                        <input type="text" name="fname" readonly value="{{ $spouseDeath['fname'] }}">
                    </label>
                    <label for=””>Middle Name:
                        <input type="text" name="mname" readonly value="{{ $spouseDeath['mname'] }}">
                    </label>
                    <label for=””>Last Name:
                        <input type="text" name="lname" readonly value="{{ $spouseDeath['lname'] }}">
                    </label>
                    <label for=””>ID Type:
                        <input type="text" name="idtype" readonly value="{{ $spouseDeath['idtype'] }}">
                    </label>
                    <label for=””>Spouse's First Name:
                        <input type="text" name="spousefname" readonly value="{{ $spouseDeath['spousefname'] }}">
                    </label>
                    <label for=””>Spouse's Middle Name:
                        <input type="text" name="spousemname" readonly value="{{ $spouseDeath['spousemname'] }}">
                    </label>
                    <label for=””>Spouse's Last Name:
                        <input type="text" name="spouselname" readonly value="{{ $spouseDeath['spouselname'] }}">
                    </label>
                    <label for=””>Place of Death:
                        <input type="text" name="deathplace" readonly value="{{ $spouseDeath['deathplace'] }}">
                    </label>
                    <label for=””>Late Registration:
                        <input type="text" name="lateReg" readonly value="{{ $spouseDeath['lateReg'] }}">
                    </label>
                    <label for=””>Purpose:
                        <input type="text" name="purpose" readonly value="{{ $spouseDeath['purpose'] }}">
                    </label>
                    <label for=””>Email:
                        <input type="text" name="email" readonly value="{{ $spouseDeath['email'] }}">
                    </label>
                    <label for=””>Status:
                        <input type="text" name="status" id="status" value="{{ $spouseDeath['status'] }}">
                    </label> <br>
                    <button type="submit">Update</button>
                    <a href="/spouseDeathRequest"><button type="submit" style="background-color:green; color:white">Back</button></a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
