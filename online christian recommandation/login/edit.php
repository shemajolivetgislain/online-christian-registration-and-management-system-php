<html>
<body>
<?php
include('dbconnection.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$fname=$_POST['fname']; //Associative array
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$query3=mysql_query("update addd set fname='$fname',lname='$lname',sex='$sex', age='$age' where id='$id'");
if($query3)
{
//header('location:list.php');
}
echo"<br>";
echo"The update is done successfully";
}
$query1=mysql_query("select * from addd where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
<caption> <h3> Welcome to Update your Records!  </h3> </caption>
<table border=0>
<tr>
<td><b>First Name:</b></td>  <td><input type="text" name="fname" value="<?php echo $query2['fname']; ?>" /></td>
</tr>
<tr>
<td><b>Last Name:</b></td>  <td><input type="text" name="lname" value="<?php echo $query2['lname']; ?>" /></td>
</tr>
<tr>
<td><b>Sex:</b></td>  <td><input type="text" name="sex" value="<?php echo $query2['sex']; ?>" /></td>
</tr>
<tr>
<td><b>Age:</b></td>   <td><input type="text" name="age" value="<?php echo $query2['age']; ?>" /></td>
</tr>
<tr>
<center> <td rowspan=2><input type="submit" name="submit" value="update" /> </td></center>
</tr>
</table>
<a href="list.php">View the updated record(s)</a>
</form>
<?php
}
?>
<div id="profile">
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>