<?php include('header.php'); ?>
<style>
  
table {  
    color: #333; /* Lighten up font color */
    font-family: Helvetica, Arial, sans-serif; /* Nicer font */
    width: 540px; 
    border-collapse: collapse;
     border-spacing: 0; 
     
}

td, th {
     border: 1px solid yellow; 
     height: 20px;
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
  color: tan;
  border-bottom: solid 1px black;
  height:0px;
  font-family:Abril Fatface;
}


img{
float:left;
margin:5px;
width:20px;
height:20px;
border-radius:3px;
}
a{
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
    background-color: #0099cc;
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
<div id="content"style="overflow:scroll;">
<?php
$g=$_POST['search'];
mysql_connect('localhost','root','')or die('could not connect'.mysql_error());
mysql_select_db('adepl'); 
echo"<table border=1>"; 
echo"<tr>";
echo"<th>FirstName</th>" ;
echo"<th>LastName</th>" ;
echo"<th>status</th>" ;
echo"<th>jobstatus</th>" ;
echo"<th>sex</th>" ;
echo"<th>district</th>" ;
echo"<th>sector</th>" ;
echo"<th>umudugudu</th>" ;
echo"<th>telephone</th>" ;
echo"</tr>";

$d="select * FROM registration where fname like'%$g%'";
$result=mysql_query($d);
while($row=mysql_fetch_array($result))
{
echo "<tr><td>".$row['fname']."</td>";
echo "<td>".$row['lname']."</td>";
echo"<td>". $row['status']."</td>";
echo "<td>".$row['jobstatus']."</td>";
echo "<td>".$row['sex']."</td>";
echo "<td>".$row['district']."</td>";
echo "<td>".$row['sector']."</td>";
echo"<td>". $row['umudugudu']."</td>";
echo "<td>".$row['telephone']."</td>";
echo"</tr>";
}
echo"</table>"; 
?>
</body>
</html>