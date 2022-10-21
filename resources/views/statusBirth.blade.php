<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Edit Status for Birth Request</h2><br/>
      <div class="container">
    </div>
      <form action="/updateBirth" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="hidden" name="id" value="{{$birth['id']}}"> <br>
            <input type="text" name="sex" readonly value="{{$birth['sex']}}"> <br>
            <input type="text" name="fname" readonly value="{{$birth['fname']}}"><br>
            <input type="text" name="mname" readonly value="{{$birth['mname']}}"><br>
            <input type="text" name="lname" readonly value="{{$birth['lname']}}"><br>
            <input type="text" name="birthdate" readonly value="{{$birth['birthdate']}}"><br>
            <input type="text" name="birthplace" readonly value="{{$birth['birthplace']}}"><br>
            <input type="text" name="idtype" readonly value="{{$birth['idtype']}}"><br>
            <input type="text" name="ffname" readonly value="{{$birth['ffname']}}"><br>
            <input type="text" name="fmname" readonly value="{{$birth['fmname']}}"><br>
            <input type="text" name="flname" readonly value="{{$birth['flname']}}"><br>
            <input type="text" name="mfname" readonly value="{{$birth['mfname']}}"><br>
            <input type="text" name="mmname" readonly value="{{$birth['mmname']}}"><br>
            <input type="text" name="mlname" readonly value="{{$birth['mlname']}}"><br>
            <input type="text" name="lateReg" readonly value="{{$birth['lateReg']}}"><br>
            <input type="text" name="purpose" readonly value="{{$birth['purpose']}}"><br>
            <input type="text" name="phone" readonly value="{{$birth['phone']}}"><br>
            <input type="text" name="status" value="{{$birth['status']}}"><br>
            <button type="submit">Update</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>