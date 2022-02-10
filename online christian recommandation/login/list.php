<html>
<body>
<center>
<fieldset style="width:300px;">
<a href="add.php"> Back to The Form</a> 
<br>
<br>
<div id="profile">
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<p align="center"><I><font color="#FF0000" size="6">Student's Records</font></I></p>
<!-- printing the selected records, see this line below-->
<input type="button"name="submit" onclick="window.print()" size="21" value="print"/>
<br>
<?php
include('dbconnection.php');
$query1=mysql_query("select id, fname,lname,sex,age from addd");
echo "<table border=1>
<tr>
<td><b>FirstName</b></td>
<td><b>LastName</b></td>
<td><b>Sex</b></td>
<td><b>Age</b></td>
<td></td> 
<td></td>";

while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['fname']."</td>";
echo "<td>".$query2['lname']."</td>";
echo "<td>".$query2['sex']."</td>";
echo "<td>".$query2['age']."</td>";
echo "<td><a href='edit.php?id=".$query2['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$query2['id']."'>Delete</a></td></tr>";
}
?>
</ol>
</table>
</fieldset>
</center>
</body>
</html>