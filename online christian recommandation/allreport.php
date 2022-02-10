
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
h2{
    font-family:century;
    font-weight:bold;
    text-transform:uppercase;
    margin:auto;
    margin-left:100px;
}
</style>

<a href="addchristian.php"> back</a>
<h2>all adepr christian report</h2>
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


}
?>
</ol>

</table>
</fieldset>


</body>
</html>