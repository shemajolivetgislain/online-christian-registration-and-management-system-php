<?php include('header.php'); ?>
<?php
include('dbconnect.php');
if(isset($_GET['uid']))
{
$uid=$_GET['uid'];
if(isset($_POST['submit']))
{
$afname=$_POST['ufname']; //Associative array
$alname=$_POST['ulname'];
$sex=$_POST['sex'];
$usector=$_POST['usector'];
$udistrict=$_POST['udistrict'];
$uprovince=$_POST['uprovince'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$national=$_POST['national'];
$username=$_POST['username'];
$password=$_POST['password'];
$query3=mysql_query("update users set ufname='$afname',ulname='$ulname',sex='$sex',usector='$usector',udistrict='$udistrict',uprovince='$uprovince',email='$email',telephone='$telephone',national='$national',username='$username',password='$passsword', where uid='$uid'");
if($query3)
{
//header('location:list.php');
}
echo"<br>";
echo"<text >The update is done successfully</text>";
}
$query1=mysql_query("select * from users where uid='$uid'");
$query2=mysql_fetch_array($query1);
?>
<div id="content">
<form method="post" action="">
<caption> <h3> Welcome to Update your Records!  </h3> </caption>
<table border=0>
<tr>
<td><b>First Name:</b></td>  <td><input type="text" name="ufname" value="<?php echo $query2['ufname']; ?>" /></td>
</tr>
<tr>
<td><b>Last Name:</b></td>  <td><input type="text" name="ulname" value="<?php echo $query2['ulname']; ?>" /></td>
</tr>
<tr>
<td><b>sector:</b></td>   <td><input type="text" name="usector" value="<?php echo $query2['usector']; ?>" /></td>
</tr>
<tr>
<td><b>district:</b></td>   <td><input type="text" name="udistrict" value="<?php echo $query2['udistrict']; ?>" /></td>
</tr>
<tr>
<td><b>province:</b></td>   <td><input type="text" name="uprovince" value="<?php echo $query2['uprovince']; ?>" /></td>
</tr>
<tr>
<td><b>email:</b></td>   <td><input type="text" name="email" value="<?php echo $query2['email']; ?>" /></td>
</tr>
<tr>
<td><b>telephone:</b></td>  <td><input type="text" name="telephone" value="<?php echo $query2['telephone']; ?>" /></td>
</tr>
<td><b>national id:</b></td>   <td><input type="number" name="national" value="<?php echo $query2['national']; ?>" /></td>
</tr>
<tr>
<td><b>username:</b></td>   <td><input type="text" name="username" value="<?php echo $query2['username']; ?>" /></td>
</tr>
<tr>
<td><b>password:</b></td>   <td><input type="text" name="password" value="<?php echo $query2['password']; ?>" /></td>
</tr>
<tr>
<center> <td rowspan=2><input type="submit" name="submit" value="update" /> </td></center>
</tr>
</table>
<a href="list.php">View the updated record(s)</a>
</form>
</div>
<?php
}
?>
</body>
</html>