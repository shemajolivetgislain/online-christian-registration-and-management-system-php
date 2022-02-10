<?php
include('clogin.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location:cprofile.php");
if($username=='admin')
{
header("location:admin.php");    
}
}
?>
<?php include('header.php'); ?>
<div id="body">
<div class="user-login">
<form action="" method="POST">
    <h1>Sign-in</h1>
<input type="text" name="username" placeholder="username"><br>
<input type="password" name="password" placeholder="Enter a password"><br>
<input name="submit" type="submit" value="Login">
<span class="egera">Are you new?&nbsp;&nbsp;<a href="register.php">Sign-up</a>&nbsp;here!</span><br>
<a href="#">Forgot</a>&nbsp;&nbsp;password?<br>      
<span><?php echo $error; ?></span>
</form></div>
<div id="note">
<img src="img/id.png" class="id">
<text>NIDA is a government institution that is in charge
of ID card production and biometric registration of rwandan 
citizens.We produce id cards for those who is 16 years old and 
above,So in this short system we are going to help you by 
sending the appointments when to be with your staff and we 
never make you tired of waiting...</text>
</div>
<div class="note1">
<text id="iburyo">If you have any problem with your Id,
NIDA is  large an productive insitution that will always 
work with rwandan peoples and other foreigns.
we also have some services that will be more geniousy 
and helpful in your daily life, and necer be confused.
just wait and see how it will look?</text>
</div>

</div>
    <?php include('footer.php'); ?>
</div>
</body>
</html>