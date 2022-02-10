<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location:adpl.html");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="styl.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
    <div id="header"> login </div>
<div id="form">
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
<div></div>
</form>
</div>
</div>
</body>
</html>