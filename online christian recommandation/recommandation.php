<?php include('headerR.php'); ?>
<?php
include("dbconnect.php");
   // $Uid=mysql_real_escape_string($_POST['Uid']);
	$parishname=mysql_real_escape_string($_POST['parishname']);
	$names=mysql_real_escape_string($_POST['names']);
	$reason=mysql_real_escape_string($_POST['reason']);
	$district=mysql_real_escape_string($_POST['district']);
	$parish=mysql_real_escape_string($_POST['parish']);
	$umudugudu=mysql_real_escape_string($_POST['umudugudu']);
	$givedate=mysql_real_escape_string($_POST['givedate']);
	$validate=mysql_real_escape_string($_POST['validate']);
	$place=mysql_real_escape_string($_POST['place']);
	$todate=mysql_real_escape_string($_POST['todate']);
	$pastorname=mysql_real_escape_string($_POST['pastorname']);
		$inserts=mysql_query("insert into recommandation values('','$parishname','$names','$reason','$district','$parish','$umudugudu','$givedate','$validate','$place','$todate','$pastorname')")
   or die('not be connected'.mysql_error());
if($inserts)
{

}
        //header("location:news.html");
	
?>
<html>
    <header>
        <style>
        h3 {
text-align:center;
border-radius:10px 10px 0 0;
margin:-10px -40px;
padding:15px
}

input[type=text],input[type=number] {
width:99.5%;
padding:4px;
margin-top:8px;
border:1px solid #000000;
padding-left:100px;
font-size:16px;
font-family:raleway;

}
select,input[type=date] {
width:99.5%;
padding:5px;
margin-top:8px;
border:1px solid #000000;
padding-left:5px;
font-size:16px;
font-family:raleway

}
input[type=submit] {

background-color:#1A2421;
color:#fff;
border:2px solid black;
padding:2px;
font-size:17px;
cursor:pointer;
border-radius:3px;
}
p{
    color:black;
    font-size:14px;
    text-transform: uppercase;
    font-family:dubai;
    
}
input[type=text],input[type=number],select:focus{
  box-shadow:0 0 8px 0;
}
a{
    border-left: 3px solid rgba(0, 0, 0, 0);
color: #fff;
display: block;
font-family:georgia;
font-size: 15px;
line-height:32px;
padding: 0 17px;
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
    background-color: #296c9b;
    color: black;
}
.men li:hover {
    background-image:url(images/14.jpg);
}

        </style></header>
   <div id="wallpaper">
       <div id="left">
        <div id="lef"><br><br>    <h3><i class="fa fa-link" aria-hidden="true"></i>QUICK LINK</H3>
                     <div class="column men">
    <ul>
      <li> <a href="addchrist2.php">add christian</a></li>
      <li><a href="worker2.php">add workers</a></li>
      <li><a href="listrubavu.php">listofchristian</a></li>
      <li><a href="listworkR.php">volunterslist</a></li>
      <li><a href="Rec.php">get recommandation</a></li>
    </ul>
  </div>
        </div>
        </div>

        <div id="content" style="overflow:scroll">

<div id="box3" align="center" >
    
 <br><br>
<br>
<fieldset style="width:500px;height:730px;border-color:whiteorange;background-color:#ffffff;">
    <i class="fa fa-user-circle-o" style="margin-top:-39px;font-size:90px;margin-left:5px;color:black;border-radius:85px;background-color:#333;"></i>
<table>
	<form action="recommandation.php" method="POST">
<h3>icyemezo cyu buhuhamye bwu mukristo</b></h3><br>
<table>
<tbody><tr><td> parishname:<td><input type="text" name="parishname"placeholder=""/></td></tr>
<tr><td>names:</td><td><input type="text" name="names"placeholder=""/></td></tr>
<tr><td>reason:</td><td><textarea rows=3 cols=5 placeholder="reason" name="reason"></textarea></td></tr>
<tr><td>district:</td><td><input type="text" name="district"placeholder=""/></td></tr>
<tr><td>parish</td><td><input type="text" name="parish"placeholder="your age"/></td></tr>

<tr><td>umudugudu:</td><td><input type="text" name="umudugudu"placeholder="your gender"/></td></tr>
<tr><td>give date:</td><td><input type="date" name="givedate"placeholder="your gender"/></td></tr>
<tr><td>validate:</td><td><input type="date" name="validate"placeholder="yoursector"/></td></tr>
<tr><td>place:</td><td><input type="text" name="place"placeholder="your district"/></td></tr>
<tr><td>to date:</td><td><input type="date" name="todate"placeholder="your district"/></td></tr>
<tr><td>pastorname:</td><td><input type="text" name="pastorname"placeholder="your district"/></td></tr>
<tr><td><input type="submit" value="REGISTER" ></td>
<td><input type="submit"value="cancel"> </td></tr></tbody></table>
</form>
</fieldset>
        </div>
        </div>
 <?php include('foooter2.php'); ?>
    </div>
    </div>
</body>
</html>


