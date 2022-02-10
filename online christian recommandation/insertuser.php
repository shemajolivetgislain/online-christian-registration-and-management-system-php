<html>
<head>
	<title>users</title>
<?php
include("dbconnect.php");
   // $Uid=mysql_real_escape_string($_POST['Uid']);
	$ufname=mysql_real_escape_string($_POST['ufname']);
	$ulname=mysql_real_escape_string($_POST['ulname']);
	$sex=mysql_real_escape_string($_POST['sex']);
	$usector=mysql_real_escape_string($_POST['usector']);
	$udistrict=mysql_real_escape_string($_POST['udistrict']);
	$uprovince=mysql_real_escape_string($_POST['uprovince']);
	$email=mysql_real_escape_string($_POST['email']);
	$telephone=mysql_real_escape_string($_POST['telephone']);
	$national=mysql_real_escape_string($_POST['national']);
	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
		$inserts=mysql_query("insert into users values('','$ufname','$ulname','$sex','$usector','$udistrict','$uprovince','$email','$telephone','$national','$username','$password')")
   or die('not be connected'.mysql_error());
if($inserts)
{
	echo"it is well connected in db";
}
        //header("location:news.html");
	
?>
<br>
<br>
<br>
<br>
<a href="addusers.html">users registrations</a>