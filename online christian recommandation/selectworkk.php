<style>
body{
    background-color:grey;
}
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
  font-size: 15px;
  color: black;
  border-bottom: solid 1px rgba(255,255,255,0.1);
  background-color:transparent;
  text-transform: uppercase;
}

}
</style>

<p align="center"><u><font color="black" family="century" size="6">remera workers report</font></u></p>
<!-- printing the selected records, see this line below-->
<input type="button"name="submit" onclick="window.print()" size="21" value="print"/>
<br><br>
<?php
include('dbconnect.php');
$query1=mysql_query("select * from workers where district='kigali'");
echo "<table border=1>
<tr>
<th><b>FirstName</b></th>
<th><b>LastName</b></th>
<th><b>status</b></th>
<th><b>jobstatus</b></th>
<th><b>gender</b></th>
<th><b>district</b></th>
<th><b>sector</b></th>
<th><b>umudugudu</b></th>
<th><b>telephone</b></th>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['fname']."</td>";
echo "<td>".$query2['lname']."</td>";
echo "<td>".$query2['status']."</td>";
echo "<td>".$query2['jobstatus']."</td>";
echo "<td>".$query2['sex']."</td>";
echo "<td>".$query2['district']."</td>";
echo "<td>".$query2['sector']."</td>";
echo "<td>".$query2['umudugudu']."</td>";
echo "<td>".$query2['telephoneno']."</td>";

}
?>
</ol>
</table>
</fieldset>

</body>
</html>