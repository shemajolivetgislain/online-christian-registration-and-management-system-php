<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user']))
{
if($username=='admin'){
 header("location:adpl.php");
}
if($username=='adminremera'){
 header("location:adminkigali.php");
}
if($username=='admingisenyi'){
 header("location:adminrubavu.php");
}
if($username=='adminbutare'){
 header("location:adminhuye.php");
}
  if($username=='adminkibungo')
  {
 header("location: adminngoma.php"); 
}
  if($username=='adminruhengeri')
  {
 header("location: adminngoma.php"); 
}}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
   <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="styl.css">
<style>
  #head{
      width:100%;
      height:25%;
      background-color: black;
      opacity:0.50;
      margin-top:-20px;
  }
h3{
  color:tan;
  font-size:20px;
  font-family:britanic;
  margin-left: 290px;
  text-transform:uppercase;
}
</style>
</head>
<body>
  <div id="head">
  <br>
  <h3> welcome to online christian recommandation and management system</h3>
  </div>
  <form method="post" action=""> 
  <div class="login-form">
     <h1>login</h1>
     <div class="form-group ">
       <input type="text" class="form-control" name="username"placeholder="Username " id="UserName" title="please enter username" required="required">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control"name="password" placeholder="Password" id="Passwod" title="please enter username" required>
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      <a class="link" href="resetpassword.php">change password ?</a>
   
     <input name="submit" type="submit" value=" Login "   class="log-btn" >
    
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</form>
</body>
</html>