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
      <form action="/updateAppointment" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="hidden" name="id" value="{{$appointment['id']}}"> <br>
            <input type="text" name="fname" readonly value="{{$appointment['fname']}}"><br>
            <input type="text" name="mname" readonly value="{{$appointment['mname']}}"><br>
            <input type="text" name="lname" readonly value="{{$appointment['lname']}}"><br>
            <input type="text" name="email" readonly value="{{$appointment['email']}}"><br>
            <input type="text" name="phone" readonly value="{{$appointment['phone']}}"><br>
            <input type="text" name="address" readonly value="{{$appointment['address']}}"><br>
            <input type="text" name="visitOften" readonly value="{{$appointment['visitOften']}}"><br>
            <input type="text" name="appointmentSubject" readonly value="{{$appointment['appointmentSubject']}}"><br>
            <input type="text" name="appointmenttDate" readonly value="{{$appointment['appointmenttDate']}}"><br>
            <input type="text" name="mostPrefTime" readonly value="{{$appointment['mostPrefTime']}}"><br>
            <input type="text" name="lessPrefTime" readonly value="{{$appointment['lessPrefTime']}}"><br>    
            <input type="text" name="status" value="{{$appointment['status']}}"><br>
            <button type="submit">Update</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>