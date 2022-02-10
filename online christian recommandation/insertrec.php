<html>
<head>
	<title>users</title>
<?php
include("dbconnect.php");
   // $Uid=mysql_real_escape_string($_POST['Uid']);
	$parishname=mysql_real_escape_string($_POST['parishname']);
	$names=mysql_real_escape_string($_POST['names']);
	$reason=mysql_real_escape_string($_POST['reason']);
	$district=mysql_real_escape_string($_POST['district']);
	$parish=mysql_real_escape_string($_POST['parish']);
	$umudugudu=mysql_real_escape_string($_POST['umudugudu']);
	$givedate=mysql_real_escape_string($_POST['givedate']);
	$validate=mysql_real_escape_string($_POST['validate']);
	$place=mysql_real_escape_string($_POST['place']);
	$todate=mysql_real_escape_string($_POST['todate']);
	$pastorname=mysql_real_escape_string($_POST['pastorname']);
		$inserts=mysql_query("insert into recommandation values('','$parishname','$names','$reason','$district','$parish','$umudugudu','$givedate','$validate','$place','$todate','$pastorname')")
   or die('not be connected'.mysql_error());
if($inserts)
{

}
        //header("location:news.html");
	
?>
<br>
<br>
<br>
<br>
<a href="addusers.html">users registrations</a>