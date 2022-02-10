<html>
<head>
	<title></title>
	        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<style>
#insert{
    background-image:url(images/we.jpg);
    width:30%;
    height:20%;
    color: white;
    margin-left: 100px;
    margin-top: 100px;
}
 a{
color:tan;
margin-left:110px;
margin-top:20px;
}
 a:hover{
background-color:yellow;
}
 a:focus{
text-shadow:0 0 8px 0 blue;
}
</style>
	</head>
	<div id="insert">
<?php
include("dbconnect.php");
	$fname=mysql_real_escape_string($_POST['fname']);
	$lname=mysql_real_escape_string($_POST['lname']);
	$status=mysql_real_escape_string($_POST['status']);
	$jobstatus=mysql_real_escape_string($_POST['jobstatus']);
	$sex=mysql_real_escape_string($_POST['sex']);
	$district=mysql_real_escape_string($_POST['district']);
	$sector=mysql_real_escape_string($_POST['sector']);
	$umudugudu=mysql_real_escape_string($_POST['umudugudu']);
	$telephoneno=mysql_real_escape_string($_POST['telephoneno']);

		$inserts=mysql_query("insert into workers values('','$fname','$lname','$status','$jobstatus','$sex','$district','$sector','$umudugudu','$telephoneno')")
   or die('not be connected'.mysql_error());
if($inserts)
{
	echo"it is well inserted in system";
}
        //header("location:news.html");
	
?>
<br>

<a href="workers.php"<i class="fa fa-check"></i>&nbsp;please click here to get back</span></a>
</div>