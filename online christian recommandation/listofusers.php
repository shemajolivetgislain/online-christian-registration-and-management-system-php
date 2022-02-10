<?php include('header.php'); ?>
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
  padding:10px;
}

td {  
    padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: tan;
  text-transform:uppercase;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}
td:hover {  
background-color:white;
opacity:0.9;
}
.men a{
    border-left: 3px solid rgba(0, 0, 0, 0);
color: #fff;
display: block;
font-family:elephant;
font-size: 13px;
line-height:32px;
padding: 0 25px;
text-decoration: none;
text-transform: lowercase;
}

.men {
    width: 100%;
}
.content {
    width: 75%;
}
.men ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.men li {
    padding: 8px;
    margin-bottom: 1px;
    background-color: #dda250;
    color: #ffffff;
}
.men li:hover {
    background-image:url(images/14.jpg);
}

</style>
 <div id="wallpaper">
<div id="left">
        <div id="lef">
        <BR>
        <h3><i class="fa fa-link" aria-hidden="true"></i>QUICK LINK</H3>
            <div class="column men">
    <ul>
      <li> <a href="addchristian.php">add christian</a></li>
      <li><a href="workers.php">add workers</a></li>
      <li><a href="christianlist.php">listofchristian</a></li>
      <li><a href="listworkers.php">volunterslist</a></li>
      <li><a href="listofusers.php">users list</a></li>
    </ul>
  </div>

        </div>
        </div>
<div id="content" style="overflow:scroll;">
<p align="center"><I><font color="orange" size="6">user's Records</font></I></p>
<!-- printing the selected records, see this line below-->
<input type="button"name="submit" onclick="window.print()" size="21" value="print"/>
<br>
<?php
include('dbconnect.php');
$query1=mysql_query("select * from users");
echo "<table border=1>
<tr>
<td><b>FirstName</b></td>&nbsp&nbsp&nbsp&nbsp
<td><b>LastName</b></td>
<td><b>sex</b></td>
<td><b>sector</b></td>
<td><b>district</b></td>
<td><b>province</b></td>
<td><b>email</b></td>
<td><b>telephone no</b></td>
<td><b>nation id</b></td>
<td><b>username</b></td>
<td><b>password</b></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['ufname']."</td>";
echo "<td>".$query2['ulname']."</td>";
echo "<td>".$query2['sex']."</td>";
echo "<td>".$query2['usector']."</td>";
echo "<td>".$query2['udistrict']."</td>";
echo "<td>".$query2['uprovince']."</td>";
echo "<td>".$query2['email']."</td>";
echo "<td>".$query2['telephone']."</td>";
echo "<td>".$query2['national']."</td>";
echo "<td>".$query2['username']."</td>";
echo "<td>".$query2['password']."</td>";
echo "<td><a href='editofusers.php?uid=".$query2['uid']."'>Edit</a></td>";
echo "<td><a href='deleteusers.php?uid=".$query2['uid']."'>Delete</a></td></tr>";
}
?>
</ol>
</table>
</fieldset>
</div>
<?php include('footer.php'); ?>
</div>
</center>
</body>
</html>