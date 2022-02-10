<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>phpSearchpage</title>
</head>
<body>
<!--
<form action="searchteacher.html" method="post">
<input type="text" name="search"  />
<input type="submit" value="search" />
</form>
-->
<a href="add.php">Back to the Form</a>
<br>
<br>
<?php
$g=$_POST['search'];
mysql_connect('localhost','root','')or die('could not connect'.mysql_error());
mysql_select_db('company'); 
echo"<table border=1>"; 
echo"<tr>";
echo"<th>Sid</th>" ;
echo"<th>SFName</th>" ;
echo"<th>SLName</th>" ;
echo"<th>SSex</th>" ;
echo"<th>SAge</th>" ;
echo"</tr>";

$d="select id,fname,lname,sex,age FROM addd where fname like'%$g%'";
$result=mysql_query($d);
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>". $row['id']."</td>";
echo "<td>".$row['fname']."</td>";
echo "<td>".$row['lname']."</td>";
echo "<td>".$row['sex']."</td>";
echo "<td>".$row['age']."</td>";
echo"</tr>";
}
echo"</table>"; 
?>
</body>
</html>