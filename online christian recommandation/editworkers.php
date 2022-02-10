
<?php
include('dbconnect.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$fname=$_POST['fname']; //Associative array
$lname=$_POST['lname'];
$status=$_POST['status'];
$jobstatus=$_POST['jobstatus'];
$sex=$_POST['sex'];
$district=$_POST['district'];
$sector=$_POST['sector'];
$umudugudu=$_POST['umudugudu'];
$telephoneno=$_POST['telephoneno'];
$query3=mysql_query("update workers set fname='$fname',lname='$lname',status='$status',jobstatus='$jobstatus',sex='$sex',district='$district',sector='$sector',umudugudu='$umudugudu',telephoneno='$telephoneno', where id='$id'");
if($query3)
{
//header('location:list.php');
}
echo"<br>";
echo"<text >The update is done successfully</text>";
}
$query1=mysql_query("select * from workers where id='$id'");
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
<td><b>status:</b></td>   <td><input type="text" name="status" value="<?php echo $query2['status']; ?>" /></td>
</tr>
<tr>
<td><b>jobstatus:</b></td>   <td><input type="text" name="jobstatus" value="<?php echo $query2['jobstatus']; ?>" /></td>
</tr>
<tr>
<td><b>sex:</b></td>   <td><input type="text" name="sex" value="<?php echo $query2['sex']; ?>" /></td>
</tr>
<tr>
<td><b>district:</b></td>   <td><input type="text" name="district" value="<?php echo $query2['district']; ?>" /></td>
</tr>
<tr>
<td><b>sector:</b></td>  <td><input type="text" name="sector" value="<?php echo $query2['sector']; ?>" /></td>
</tr>
<td><b>umudugudu:</b></td>   <td><input type="text" name="umudugudu" value="<?php echo $query2['umudugudu']; ?>" /></td>
</tr>
<tr>
<td><b>telephone:</b></td>   <td><input type="number" name="telephoneno" value="<?php echo $query2['telephoneno']; ?>" /></td>
</tr>
<tr>
<center> <td rowspan=2><input type="submit" name="submit" value="update" /> </td></center>
</tr>
</table>
<a href="listworkers.php">View the updated record(s)</a>
</form>
</div>
<?php
}
?>
</body>
</html>