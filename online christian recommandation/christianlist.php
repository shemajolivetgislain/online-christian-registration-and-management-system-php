<?php include('header.php'); ?>
<?php
include('dbconnect.php');
if(isset($_GET['aid']))
{
$aid=$_GET['aid'];
$query1=mysql_query("delete from registration where aid='$aid'");
if($query1)
{

}
}
?>
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
  border-bottom: solid 1px rgba(255,255,255,0.3);;
  height:20px;
  font-family:Abril Fatface;
    text-transform: uppercase;
}


img{
float:left;
margin:5px;
width:35px;
height:35px;
border-radius:3px;
}
a{
    border-left: 3px solid rgba(0, 0, 0, 0);
color: #fff;
display: block;
font-family:elephant;
font-size: 12px;
line-height:32px;
padding: 0 25px;
text-decoration: none;
text-transform: uppercase;
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
button{
    width: 80px;
    height: 30px;
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
<div id="content"style=";overflow:scroll;">
  <div id="search">
<form action="christiansearch.php" method="POST">
<input type="text"  size= "18" name="search" style="width: 130px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;">
<input type="submit" name="submit" value="search"/>
</div>
<a href="allreport.php" style="font-size:25px;font-weight:bold;text-transform:bold;font-family:britanic;color:black;"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;report</a>

<body>
	<br>

<?php
include('dbconnect.php');
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
<th>date of baptise</th>
<th>umudugudu</th>
<th>sector</th>
<th>district</th>
<th>province</th>";


while($query2=mysql_fetch_array($query1))
{

echo"<tr><td>" ."<a target='blank";
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
echo "<td><a href='edit.php?aid=".$query2['aid']."'><i class='fa fa-pencil-square' aria-hidden='true' style='font-size:50px;color:white;border-radus:1050px;'></i></td>";
echo "<td><a href='christianlist.php?aid=".$query2['aid']."'><i class='fa fa-trash-o'>delete</i></a></td></tr>";

}
?>
</ol>

</table>
</fieldset>
</div>
<?php include('footer.php'); ?>
</div>

</body>
</html>