<html>
<body>
<?php
include('dbconnection.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from addd where id='$id'");
if($query1)
{
echo "One record has been deleted!!";
}
}
?>
<br>
<br>
Please,
<a href="list.php">Back to List</a>
</body>
</html>