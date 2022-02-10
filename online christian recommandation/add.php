<html>
<body>
<?php
include('dbconnect.php');
if(isset($_POST['submit']))
{
$ufname=mysql_real_escape_string($_POST['ufname']); //associative array
$ulname=mysql_real_escape_string($_POST['ulname']);
$usector=mysql_real_escape_string($_POST['usector']);
$udistrict=mysql_real_escape_string($_POST['udistrict']);
$uprovince=mysql_real_escape_string($_POST['uprovince']);
$uusername=mysql_real_escape_string($_POST['uusername']);
$upassword=mysql_real_escape_string($_POST['upassword']);
$query1=mysql_query("insert into username values('','$ufname','$ulname','$usector','$udistrict''$uprovince','$uusername','$upassword')");
//echo "insert into addd values('','$fname','$lname','$sex','$age')";
if($query1)
{
	//echo"One Record has been inserted!";
	echo"The following record has been inserted:('$ufname','$ulname','$usector','$udistrict','$uprovince','$uusername','$upassword')";
	echo"<br>";
	echo"<br>";
}
}
?>
<fieldset style="width:300px;">
<form action="insertusers"method="post" action="">
<p align="center"><I><font color="#FF0000" size="3">Add/Insert New Record in your Company Database!</font></I></p>
<table border=0>
<tr>
<td><b>First Name:</b> </td> <td><input type="text" name="ufname"></td>
</tr>
<tr>
<td><b>Last Name:</b> </td> <td><input type="text" name="ulname"></td>
</tr>
<tr>
<td><b>Sector:</b> </td><td><input type="text" name="usector"></td>
</tr>
<tr>
<td><b>district:</b> </td>  <td><input type="text" name="udistrict"></td>
</tr>
<tr>
<td><b>province:</b> </td>  <td><input type="text" name="uprovince"></td>
</tr>
<tr>
<td><b>email:</b> </td>  <td><input type="email" name="email"></td>
</tr>
<tr>
<td><b>telephone no:</b> </td>  <td><input type="text" name="telephone"></td>
</tr>
<tr>
<td><b>national id:</b> </td>  <td><input type="text" name="national"></td>
</tr>
<tr>
<tr>
<td><b>username:</b> </td>  <td><input type="text" name="uusername"></td>
</tr>
<tr>
<td><b>password:</b> </td>  <td><input type="text" name="upassword"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit"/> </td> <td><input type="reset" value="reset"/></td>
</tr>
<!-- Start of search form -->
</form>
<tr>
<td colspan=2>
<form action="insertuser.php" method="POST">
<input type="text"  size= "18" name="search" >
<input type="submit" name="submit" value="search"/>
</td>
</tr>
</form> 
<!-- end of search form -->
</table>

<a href="list.php">View the Records</a>
</form>
</fieldset>
</body>
</html>