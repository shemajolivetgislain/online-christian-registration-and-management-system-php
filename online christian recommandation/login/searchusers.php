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
<a href="addusers.html">Back to the Form</a>
<br>
<br>
<?php
$g=$_POST['search'];
mysql_connect('localhost','root','')or die('could not connect'.mysql_error());
mysql_select_db('adepl'); 
echo"<table border=1>"; 
echo"<tr>";
echo"<th>uid</th>" ;
echo"<th>uFName</th>" ;
echo"<th>uLName</th>" ;
echo"<th>SSex</th>" ;
echo"<th>uSector</th>" ;
echo"<th>udistrict</th>" ;
echo"<th>uprovince</th>" ;
echo"<th>email</th>" ;
echo"<th>telephone</th>" ;
echo"<th>national</th>" ;
echo"<th>username</th>" ;
echo"<th>password</th>" ;
echo"</tr>";

$d="select * FROM users where ufname like'%$g%'";
$result=mysql_query($d);
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>". $row['uid']."</td>";
echo "<td>".$row['ufname']."</td>";
echo "<td>".$row['ulname']."</td>";
echo "<td>".$row['sex']."</td>";
echo "<td>".$row['usector']."</td>";
echo "<td>".$row['udistrict']."</td>";
echo "<td>".$row['uprovince']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['telephone']."</td>";
echo "<td>".$row['national']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['password']."</td>";
echo"</tr>";
}
echo"</table>"; 
?>
</body>
</html>