<?php include('headerk.php'); ?>
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
  font-size: 15px;
  color: tan;
  border-bottom: solid 1px rgba(255,255,255,0.1);
  background-color:transparent;
  text-transform: uppercase;
}
 men a{
    border-left: 3px solid rgba(0, 0, 0, 0);
color: #fff;
display: block;
font-family:elephant;
font-size: 13px;
line-height:32px;
padding: 0 20px;
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
    padding: 5px;
    margin-bottom: 1px;
    background-color: #0099cc;
    color: #ffffff;
}
.men li:hover {
    background-image: url(images/14.jpg);
}

a{
    border-left: 3px solid rgba(0, 0, 0, 0);
color: #fff;
display: block;
font-family:elephant;
font-size: 13px;
line-height:32px;
padding: 0 20px;
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
    padding: 5px;
    margin-bottom: 1px;
    background-color: #0099cc;
    color: #ffffff;
}
.men li:hover {
    background-image: url(images/14.jpg);
}

        </style></header>
    
        <body>
           <div id="wallpaper">
       <div id="left">
        <div id="lef"><br><br>    <h3><i class="fa fa-link" aria-hidden="true"></i>QUICK LINK</H3>
                     <div class="column men">
    <ul>
      <li> <a href="addchrist1.php">add christian</a></li>
      <li><a href="worker1.php">add workers</a></li>
      <li><a href="listkigali.php">listofchristian</a></li>
      <li><a href="listworkk.php">volunterslist</a></li>
    </ul>
  </div>
        </div>
        </div>
            <div id="content" style="overflow:scroll;">
<div id="search">
<form action="christiansearch.php" method="POST">
<input type="text"  size= "18" name="search" >
<input type="submit" name="submit" value="search"/>
</div>
<a href="addchrist.php"> back </a>
</ul>
<a href="selectworkk.php" style="font-size:25px;font-weight:bold;text-transform:bold;font-family:britanic;color:black;"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;report remera</a>
<p align="center"><I><font color="#FF0000" size="6">volunterslist</font></I></p>
<!-- printing the selected records, see this line below-->
<input type="button"name="submit" onclick="window.print()" size="21" value="print"/>
<br>
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
<th><b>telephone</b></th>
<th></th>
<th></th>";
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
echo "<td><a href='editworkers.php?id=".$query2['id']."'>update</a></td>";
echo "<td><a href='deleteworkers.php?id=".$query2['id']."'>remove</a></td></tr>";
}
?>
</ol>
</table>
</fieldset>
</div>
 <?php include('foooter2.php'); ?>
</div>
</body>
</html>