<?php include('headerN.php'); ?>
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
    padding: 5px;
  text-align: left;
  vertical-align:middle;
  font-weight:bold;
  font-size: 12px;
  color: white;
  border-bottom: solid 1px rgba(255,255,255,0.1);

}

img{
float:left;
margin:5px;
width:30px;
height:30px;
border-radius:1px;
}

 a{
    border-left: 3px solid rgba(0, 0, 0, 0);
color: #fff;
display: block;
font-family:dubai;
font-size: 15px;
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
    padding: 7px;
    margin-bottom: 1px;
    background-color: #0099cc;
    color: black;
}
.men li:hover {
    background-image:url(images/14.jpg);
}
 </style>
     <body>
           <div id="wallpaper">
       <div id="left">
        <div id="lef"><br><br>    <h3><i class="fa fa-link" aria-hidden="true"></i>QUICK LINK</H3>
                     <div class="column men">
    <ul>
      <li> <a href="addngoma.php">add christian</a></li>
      <li><a href="work3.php">add workers</a></li>
      <li><a href="listngoma.php">listofchristian</a></li>
      <li><a href="listworkN.php">volunterslist</a></li>
    </ul>
  </div>
        </div>
        </div>
        <div id="content" style="overflow: scroll;">
<div id="search">
<form action="christiansearch.php" method="POST">
<input type="text"  size= "18" name="search" >
<input type="submit" name="submit" value="search"/>
</div>
<a href="selectngoma.php" style="font-size:25px;font-weight:bold;text-transform:bold;font-family:century;"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;report</a>

<body>
	<br>

<?php
include('dbconnect.php');
$query1=mysql_query("select * from registration where adistrict='ngoma'");

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
echo "<td><a href='edit3.php?aid=".$query2['aid']."'>Update</a></td>";
echo "<td><a href='delete.php?aid=".$query2['aid']."'>Remove</a></td></tr>";


}
?>
</ol>
</table>
</fieldset>
</div>
</div>
</body>
</html>