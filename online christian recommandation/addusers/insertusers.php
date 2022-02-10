<html>
<body>
<?php
include("dbconnect.php");
$uid=mysql_real_escape_string($_POST['uid']);
$ufname=mysql_real_escape_string($_POST['ufname']);
$ulname=mysql_real_escape_string($_POST['ulname']);
$usector=mysql_real_escape_string($_POST['usector']);
$udistrict=mysql_real_escape_string($_POST['udistrict']);
$uprovince=mysql_real_escape_string($_POST['uprovince']);
$uusername=mysql_real_escape_string($_POST['uusername']);
$upassword=mysql_real_escape_string($_POST['upassword']);
$inserts=mysql_query("insert into username values('$uid','$ufname','$ulname','$usector','$udistrict','$uprovince''$uusername','$upassword')")
or die('data could not be inserted successfully to  database'.mysql_error());
if($inserts)
{
	echo"the new record is inserted successfully to adepl db database";
}
?>
<br>
<a href="addusers.html">christian</a>
</body>
</html>