

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

 
<style>
body {font-family: Arial, Helvetica, sans-serif; center}
form {border: 3px solid #f1f1f1;}

body{
    
    width: 40%;
    
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div class="card" style="width: 30rem; margin-left: 80%; background-color: whitesmoke;"><br>
<center><h2>Admin  Login Form</h2></center>
@if(isset(Auth::user()->email))
    <script>window.location="/Admin";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif
  
<form action="{{ url('/login')}}" method="post">


{{ csrf_field() }}
  <div class="imgcontainer">
    <img src="../assets/img/download.png" style="width: 10rem";  alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="email"  value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
    <label>
      <input type="checkbox"  name="remember"> Remember me
    </label><br> <br> <br> 
    <input type="submit"  class="btn btn-dm btn-info" style="border-bottom:red solid 2px; height: 50px;;  border-radius:0px 0px 0px 0px; width: 150px;" class="btn btn-info btn-lg" name="login" value="Login" />
    
  </div>

  <!-- <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Remove</button>
    <span class="psw">Change passeord <a href="{{ url('/change_password')}}">password?</a></span>
  </div> -->
</form>
</div>
</body>
</html>
