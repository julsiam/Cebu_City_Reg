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
      <h2>Edit Status for Marriage Request</h2><br/>
      <div class="container">
    </div>
      <form action="/updateMarriage" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="hidden" name="id" value="{{$marriage['id']}}"> <br>
            <input type="text" name="sex" readonly value="{{$marriage['sex']}}"> <br>
            <input type="text" name="fname" readonly value="{{$marriage['fname']}}"><br>
            <input type="text" name="mname" readonly value="{{$marriage['mname']}}"><br>
            <input type="text" name="lname" readonly value="{{$marriage['lname']}}"><br>
            <input type="text" name="birthdate" readonly value="{{$marriage['birthdate']}}"><br>
            <input type="text" name="birthplace" readonly value="{{$marriage['birthplace']}}"><br>
            <input type="text" name="idtype" readonly value="{{$marriage['idtype']}}"><br>
            <input type="text" name="ffname" readonly value="{{$marriage['sfname']}}"><br>
            <input type="text" name="fmname" readonly value="{{$marriage['smname']}}"><br>
            <input type="text" name="flname" readonly value="{{$marriage['slname']}}"><br>
            <input type="text" name="marriageDate" readonly value="{{$marriage['marriageDate']}}"><br>
            <input type="text" name="marriageplace" readonly value="{{$marriage['marriageplace']}}"><br>
            <input type="text" name="purpose" readonly value="{{$marriage['purpose']}}"><br>
            <input type="text" name="legalProceedings" readonly value="{{$marriage['legalProceedings']}}"><br>
            <input type="text" name="phone" readonly value="{{$marriage['phone']}}"><br>
            <input type="text" name="status" value="{{$marriage['status']}}"><br>
            <button type="submit">Update</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>