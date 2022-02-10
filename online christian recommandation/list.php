<style>
table {  
    color: #333; /* Lighten up font color */
    font-family: Helvetica, Arial, sans-serif; /* Nicer font */
    width: 640px; 
    border-collapse: collapse;
     border-spacing: 0; 
     
}

td, th {
     border: 1px solid yellow; 
     height: 30px;
      } /* Make cells a bit taller */

th {  
    background: #333; /* Light grey background */
    font-weight: bold; /* Make sure they're bold */
 background-color: rgba(255,255,255,0.3);
  text-transform: uppercase;
  padding:5px;
}

td {  
    padding: 5px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: yellowblack;
  border-bottom: solid 1px rgba(255,255,255,0.1);
  background-color:#fff;
  text-transform: uppercase;
}

</style>

<?php include('header.php'); ?>
<div id="content">
<div id="search">
<form action="christiansearch.php" method="POST">
<input type="text"  size= "18" name="search" >
<input type="submit" name="submit" value="search"/>
</div>
<li><a href="addchrist.php"> back </li>
</ul>

<p align="center"><I><font color="#FF0000" size="6">christian Records</font></I></p>
<!-- printing the selected records, see this line below-->
<input type="button"name="submit" onclick="window.print()" size="21" value="print"/>
<br>
<?php
include('dbconnect.php');
$query1=mysql_query("select * from registration");
echo "<table border=1>
<tr>
<th><b>FirstName</b></th>
<th><b>LastName</b></th>
<th><b>fathername</b></th>
<th><b>mothername</b></th>
<th><b>region</b></th>
<th><b>Age</b></th>
<th><b>Sex</b></th>
<th><b>baptise date</b></th>
<th><b>cell</b></th>
<th><b>sector</b></th>
<th><b>district</b></th>
<th><b>province</b></th>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['afname']."</td>";
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
echo "<td><a href='edit.php?aid=".$query2['aid']."'>update</a></td>";
echo "<td><a href='delete.php?aid=".$query2['aid']."'>remove</a></td></tr>";
}
?>
</ol>
</table>
</fieldset>
</center>
</div>
</body>
</html>