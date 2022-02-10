<html>
<body>
<?php
include('dbconnection.php');
if(isset($_POST['submit']))
{
$fname=mysql_real_escape_string($_POST['fname']); //associative array
$lname=mysql_real_escape_string($_POST['lname']);
$sex=mysql_real_escape_string($_POST['sex']);
$age=mysql_real_escape_string($_POST['age']);
$query1=mysql_query("insert into addd values('','$fname','$lname','$sex','$age')");
//echo "insert into addd values('','$fname','$lname','$sex','$age')";
if($query1)
{
	//echo"One Record has been inserted!";
	echo"The following record has been inserted:('$fname','$lname','$sex','$age')";
	echo"<br>";
	echo"<br>";
}
}
?>
<fieldset style="width:300px;">
<form method="post" action="">
<p align="center"><I><font color="#FF0000" size="3">Add/Insert New Record in your Company Database!</font></I></p>
<table border=0>
<tr>
<td><b>First Name:</b> </td> <td><input type="text" name="fname"></td>
</tr>
<tr>
<td><b>Last Name:</b> </td> <td><input type="text" name="lname"></td>
</tr>
<tr>
<td><b>Sex:</b> </td> <td><select  name="sex">
                                   <option value=""> Select Sex
                                   <option>F</option>
								   <option>M</option>
								   </select>
								   </td>
</tr>
<tr>
<td><b>Age:</b> </td>  <td><input type="text" name="age"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit"/> </td> <td><input type="reset" value="reset"/></td>
</tr>
<!-- Start of search form -->
</form>
<tr>
<td colspan=2>
<form action="studentsearch.php" method="POST">
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