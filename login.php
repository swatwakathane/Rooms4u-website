<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    
   
</head>

<body>

<?php 
include 'includes/header.php'?>


<div id="signin_form_container" >
  


<h4 style="padding:1%;font-weight:350;">Sign In</h4>
<br>

<form action="" method="">

    
    <div class="form-group col-md-12">
      
      <input type="email" class="form-control input_place col-form-label-md" id="inputEmail4" placeholder="Email">
    </div>

 
    <div class="form-group col-md-12" style="margin-top:20px;">
      
      <input type="password" class="form-control input_place col-form-label-md" id="inputPassword4" placeholder="Password">
    </div>
    <br>
    <a href="forgotpassword.php">Forgot Password?</a>

    <br>
    <br>
    <div class="custom-control custom-checkbox mr-sm-2" style="padding-left:5%;" >
        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
        <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
      </div>
      

      <br>
      <br>

      <div  align="center">
        <div>
  <button type="submit" class="bnt btn-main">SIGN IN</button>
  </div>
  </div>


</form>

<br>


<div class="h-100 row text-center">
  <div class="col" >
    <a style="color:black" href="signup.php">Create an Account.</a>
  </div>
</div>
</div>







</div>
   
<?php
include 'includes/footer_copyright.php'?>


<!--script  for this page-->
<script src="https://kit.fontawesome.com/e938973e75.js"></script>

    
</body>
</html>