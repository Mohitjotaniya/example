<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style all input fields */
input {
  width: 60%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}

</style>

<style>
$('#change_password_form').validate({
    ignore:'.ignore',
    errorClass:'invalid',
    validClass:'success',
    rules:{
         old_password:{
            required:true,
            minlength:6,
            maxlength:100
         },
         new_password:{
            required:true,
            minlength:6,
            maxlength:100
         },
         confirm_password:{
            required:true,
            equalTo:'#new_password'
         },
    },
     messages: {
     
        old_password:{
            required:"Enter your old password"
        },
        new_password:{
            required:"Enter your new password"
        },
        confirm_password:{
            required:"Need to confirm your new password"
        },

     },
     submitHandler:function(form){
        $.LoadingOverlay("show");
        form.submit();
     }

});
</style>
</head>
<body>
<center>
<h2>Change Password</h2>

<div class="container">
  <form action="/action_page.php" id="change_password_form" >
  <div class="form-group">
		<label for="old_password">Old Password</label>
		<input type="password" name="old_password" class="form-control" id="old_password" >
	
		@if($errors->any('old_password'))
		  <span class="text-danger">{{$errors->first('old_password')}}</span>
		@endif
	  </div>

    <label for="usrname">new password</label><br>
    <input type="text" id="usrname" name="" ><br>


    <label for="psw">conform password</label><br>
    <input type="password" id="psw" name="" ><br>
    
    <input type="submit" value="Submit">
  </form>
</div>

</center>

</body>
</html>
