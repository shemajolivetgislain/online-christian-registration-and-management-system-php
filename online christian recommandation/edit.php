<?php include('header.php'); ?>
<html>
    <header>
 <style>
      h2{
     margin-top:-5px;
     font-family:book MT;
     font-size:14px;
     text-transform:uppercase;
     padding-top:30px;
      text-shadow:0 0 11px 0 black;
 }
     
 p{
     margin-top:-5px;
     font-family:dubai  red;
     font-size:14px;
     text-shadow:0 0 11px 0 red;
     
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
    background-image: url(images/14.jpg);
}
text{
    font-size: 17px;
}
 </style></header><body>
  <div id="wallpaper">
      
        <div id="right"></div>
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
<?php
include('dbconnect.php');
if(isset($_GET['aid']))
{
$aid=$_GET['aid'];
if(isset($_POST['submit']))
{
$image=$_FILES['image']['name'];
$afname=$_POST['afname']; //Associative array
$alname=$_POST['alname'];
$afathername=$_POST['afathername'];
$amothername=$_POST['amothername'];
$region=$_POST['region'];
$aage=$_POST['aage'];
$sex=$_POST['asex'];
$dateofbaptise=$_POST['dateofbaptise'];
$cell=$_POST['cell'];
$asector=$_POST['asector'];
$adistrict=$_POST['adistrict'];
$province=$_POST['province'];
$query3=mysql_query("update registration set image='$image',afname='$afname',alname='$alname',afathername='$afathername',amothername='$amothername',region='$region',aage='$aage',asex='$sex',dateofbaptise='$dateofbaptise',cell='$cell',asector='$asector',adistrict='$adistrict',province='$province'  where aid='$aid'");
if($query3)
{
//header('location:list.php');
}
echo"<br>";
echo"<text >The update is done successfully</text>";
}
$query1=mysql_query("select * from registration where aid='$aid'");
$query2=mysql_fetch_array($query1);
?>

<form method="post" action="" enctype="multipart/form-data">
<caption> <h3> Welcome to Update your Records!  </h3> </caption>
<table border=0>
<tr>
<td>
    <input type="file" name="image"  size="16" value="<?php echo $query2['image']; ?>" /></td>
    </td>
    </tr>
<tr>
<td><b>First Name:</b></td>  <td><input type="text" name="afname" value="<?php echo $query2['afname']; ?>" /></td>
</tr>
<tr>
<td><b>Last Name:</b></td>  <td><input type="text" name="alname" value="<?php echo $query2['alname']; ?>" /></td>
</tr>
<tr>
<td><b>fathername:</b></td>   <td><input type="text" name="afathername" value="<?php echo $query2['afathername']; ?>" /></td>
</tr>
<tr>
<td><b>mothername:</b></td>   <td><input type="text" name="amothername" value="<?php echo $query2['amothername']; ?>" /></td>
</tr>
<tr>
<td><b>birth region:</b></td>   <td><input type="text" name="region" value="<?php echo $query2['region']; ?>" /></td>
</tr>
<tr>
<td><b>birth date:</b></td>   <td><input type="date" name="aage" value="<?php echo $query2['aage']; ?>" /></td>
</tr>
<tr>
<td><b>Sex:</b></td>  <td><input type="text" name="asex" value="<?php echo $query2['asex']; ?>" /></td>
</tr>
<td><b>birth date of baptise:</b></td>   <td><input type="date" name="dateofbaptise" value="<?php echo $query2['dateofbaptise']; ?>" /></td>
</tr>
<tr>
<td><b>cell:</b></td>   <td><input type="text" name="cell" value="<?php echo $query2['cell']; ?>" /></td>
</tr>
<tr>
<td><b>sector:</b></td>   <td><input type="text" name="asector" value="<?php echo $query2['asector']; ?>" /></td>
</tr>
<tr>
<td><b>district:</b></td>   <td><input type="text" name="adistrict" value="<?php echo $query2['adistrict']; ?>" /></td>
</tr>
<tr>
<td><b>province:</b></td>   <td><input type="text" name="province" value="<?php echo $query2['province']; ?>" /></td>
</tr>
<tr>
<center> <td rowspan=2><input type="submit" name="submit" value="update" /> </td></center>
</tr>
</table>
<a href="christianlist.php">View the updated record(s)</a>
</form>
</div>
<?php
}
?>
</div>
</body>
</html>