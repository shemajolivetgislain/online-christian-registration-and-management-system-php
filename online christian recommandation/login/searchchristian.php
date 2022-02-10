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
<a href="christiansearch.php">Back to the Form</a>
<br>
<br>
<?php
$g=$_POST['search'];
mysql_connect('localhost','root','')or die('could not connect'.mysql_error());
mysql_select_db('adepl'); 
echo"<table border=1>"; 
echo"<tr>";
echo"<th>id</th>" ;
echo"<th>FName</th>" ;
echo"<th>LName</th>" ;
echo"<th>fathername</th>" ;
echo"<th>mothername</th>" ;
echo"<th>birth region</th>" ;
echo"<th>date of birth</th>" ;
echo"<th>sex</th>" ;
echo"<th>date of baptise</th>" ;
echo"<th>cell</th>" ;
echo"<th>sector</th>" ;
echo"<th>district</th>" ;
echo"<th>province</th>" ;
echo"</tr>";

$d="select * FROM users where afname like'%$g%'";
$result=mysql_query($d);
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>". $row['aid']."</td>";
echo "<td>".$row['afname']."</td>";
echo "<td>".$row['alname']."</td>";
echo "<td>".$row['afathername']."</td>";
echo "<td>".$row['amother']."</td>";
echo "<td>".$row['region']."</td>";
echo "<td>".$row['aage']."</td>";
echo "<td>".$row['asex']."</td>";
echo "<td>".$row['dateofbaptise']."</td>";
echo "<td>".$row['cell']."</td>";
echo "<td>".$row['asector']."</td>";
echo "<td>".$row['adistrict']."</td>";
echo "<td>".$row['province']."</td>";
echo"</tr>";
}
echo"</table>"; 
?>
</body>
</html>