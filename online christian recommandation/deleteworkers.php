<html>
<body>
<?php
include('dbconnect.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from workers where id='$id'");
if($query1)
{
echo "One record has been deleted!!";
}
}
?>
<br>
<br>
Please,
<a href="listworkers.php">Back to List</a>
</body>
</html>