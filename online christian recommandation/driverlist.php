<html>
<head>
<link rel="stylesheet" type="text/css" href="driverimage.css">
	<style>
	table{
		border-collapse: 0px collapse;
		overflow-x:auto;
	}
	th{
	text-shadow:2px 2px white;	
	}
	td{
			text-shadow:1px 1px white;
		text-align: left;
		padding: 1px;}
		tr:nth-child(even){background-color:lightgreen;}
	}
	</style>
</head>
<body>
	<br>
	<fieldset style="width:70%;height:95%; margin-left:150px;border-color:blue;background-color:lightgreen;color:white;">
	<br>
    <a href="firstpage.php"><img src="back.png" width="5%" height="7%"></a> 
<a href="carleg.php"><img src="addnew.png" width="4%" height="7%"></a> 
<a href="selectcar.php"><img src="report.jpg" width="5%" height="7%"></a>  
<br>
<center><FONT color="blue" size="6"><u><b>ALL DRIVER LIST </b> </u></font></center>
<br>
<br>
<?php
include('dbconnection.php');
$query1=mysql_query("select * from registration order by afname");

echo"<table border=0>
<th>IMAGE </th>
<th>FIRSTNAME</th>
<th>LASTNAME</th>
<th>fathername</th>
<th>mothername</th>
<th>birthregion</th>
<th>birthdate</th>
<th>gender</th>
<th>umudugudu</th>
<th>sector</th>
<th>district</th>
<th>province</th>";


while($query2=mysql_fetch_array($query1))
{

echo"<tr><td>";
 echo"<div id='img_div'>";
 echo"<img src='images/".$query2['image']."'>";
echo "<td>".$query2['afname']."</td>";
echo "<td>".$query2['alname']."</td>";
echo "<td>".$query2['afathername']."</td>";
echo "<td>".$query2['amothername']."</td>";
echo "<td>".$query2['region']."</td>";
echo "<td>".$query2['aage']."</td>";
echo "<td>".$query2['asex']."</td>";
echo "<td>".$query2['dateofbaptise']."</td>";
echo "<td>".$query2['cell']."</td>";
echo "<td>".$query2['asector']."</td>";
echo "<td>".$query2['adistrict']."</td>";
echo "<td>".$query2['province']."</td>";
echo "<td><a href='editcar.php?did=".$query2['did']."'>Update</a></td>";
echo "<td><a href='deletedriver.php?did=".$query2['did']."'>Remove</a></td></tr>";


}
?>
</ol>
</table>
</fieldset>
</body>
</html>