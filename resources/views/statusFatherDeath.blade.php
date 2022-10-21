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
      <h2>Edit Status for Death Certificate Request</h2><br/>
      <div class="container">
    </div>
      <form action="/updateFatherDeath" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="hidden" name="id" value="{{$fatherDeath['id']}}"> <br>
            <input type="text" name="sex" readonly value="{{$fatherDeath['sex']}}"> <br>
            <input type="text" name="fname" readonly value="{{$fatherDeath['fname']}}"><br>
            <input type="text" name="mname" readonly value="{{$fatherDeath['mname']}}"><br>
            <input type="text" name="lname" readonly value="{{$fatherDeath['lname']}}"><br>
            <input type="text" name="idtype" readonly value="{{$fatherDeath['idtype']}}"><br>
            <input type="text" name="ffname" readonly value="{{$fatherDeath['ffname']}}"><br>
            <input type="text" name="fmname" readonly value="{{$fatherDeath['fmname']}}"><br>
            <input type="text" name="flname" readonly value="{{$fatherDeath['flname']}}"><br>
            <input type="text" name="deathplace" readonly value="{{$fatherDeath['deathplace']}}"><br>
            <input type="text" name="lateReg" readonly value="{{$fatherDeath['lateReg']}}"><br>
            <input type="text" name="purpose" readonly value="{{$fatherDeath['purpose']}}"><br>
            <input type="text" name="email" readonly value="{{$fatherDeath['email']}}"><br>
            <input type="text" name="status" value="{{$fatherDeath['status']}}"><br>
            <button type="submit">Update</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>