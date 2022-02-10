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

<div id="search">
<form action="christiansearch.php" method="POST">
<input type="text"  size= "18" name="search" >
<input type="submit" name="submit" value="search"/>
</div>
<li><a href="addchrist.php"> back </li>
</ul>

<p align="center"><I><font color="#FF0000" size="6">recommandation list</font></I></p>
<!-- printing the selected records, see this line below-->
<input type="button"name="submit" onclick="window.print()" size="21" value="print"/>
<br>
<?php
include('dbconnect.php');
$query1=mysql_query("select * from recommandation");
echo "<table border=1>
<tr>
<th><b>parishname</b></th>
<th><b>names</b></th>
<th><b>reason</b></th>
<th><b>dstrict</b></th>
<th><b>parish</b></th>
<th><b>umudugudu</b></th>
<th><b>givedate</b></th>
<th><b>validate</b></th>
<th><b>place</b></th>
<th><b>todate</b></th>
<th><b>pastorname</b></th>
<th></th>
<th></th>";


while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['parishname']."</td>";
echo "<td>".$query2['names']."</td>";
echo "<td>".$query2['reason']."</td>";
echo "<td>".$query2['district']."</td>";
echo "<td>".$query2['parish']."</td>";
echo "<td>".$query2['umudugudu']."</td>";
echo "<td>".$query2['givedate']."</td>";
echo "<td>".$query2['validate']."</td>";
echo "<td>".$query2['place']."</td>";
echo "<td>".$query2['todate']."</td>";
echo "<td>".$query2['pastorname']."</td>";
echo "<td><a href='edit.php?rid=".$query2['rid']."'>update</a></td>";
echo "<td><a href='deleter.php?rid=".$query2['rid']."'>remove</a></td></tr>";
}
?>
</ol>
</table>
</fieldset>
</center>
</div>
</body>
</html>