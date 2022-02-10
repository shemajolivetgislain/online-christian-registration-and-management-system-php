<?php include('headerk.php'); ?>
<?php
include("dbconnect.php");
	$fname=mysql_real_escape_string($_POST['fname']);
	$lname=mysql_real_escape_string($_POST['lname']);
	$status=mysql_real_escape_string($_POST['status']);
	$jobstatus=mysql_real_escape_string($_POST['jobstatus']);
	$sex=mysql_real_escape_string($_POST['sex']);
	$district=mysql_real_escape_string($_POST['district']);
	$sector=mysql_real_escape_string($_POST['sector']);
	$umudugudu=mysql_real_escape_string($_POST['umudugudu']);
	$telephoneno=mysql_real_escape_string($_POST['telephoneno']);

		$inserts=mysql_query("insert into workers values('','$fname','$lname','$status','$jobstatus','$sex','$district','$sector','$umudugudu','$telephoneno')")
   or die('not be connected'.mysql_error());
if($inserts)
{
	echo"it is well inserted in system";
}
        //header("location:news.html");
	
?>
<html>
    <header>
        <style>
        td{
            font-family:britanic;
            font-weight:bold;
            text-transform: uppercase;
            font-size:15px;
        }
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
<br><br>
<div id="box3" align="center">
     <fieldset style="width:700px;height:730px;border-color:whiteorange;background-color:#ffffff;">
     <i class="fa fa-user-circle-o" style="margin-top:-39px;font-size:90px;margin-left:5px;color:black;border-radius:85px;background-color:#333;"></i>
<br>
<table>
	<form action="insertworkers.php"method="POST">
<p> volunteer REGISTRATION FORM</p>
<p> if you want to fill register the volunteer</p>
<p> please the form here</p><br>
<table>
<tbody><tr><td> first Names:<td><input type="text" name="fname"placeholder="firstname"/></td></tr>
<tr><td>last name:</td><td><input type="text" name="lname"placeholder="lastname"/></td></tr>
<tr><td>status:</td><td><input type="text" name="status"placeholder="your father name"/></td></tr>
<tr><td>jobstatus:</td><td><input type="text" name="jobstatus"placeholder="your mother name"/></td></tr>
<tr><td>gender:</td><td><select  name="sex">
          <option value="">select gender
    <option >male
    <option >female
    </select><td></tr>
<tr><td>district:</td><td><select  name="district">
          <option value="">select you district
    <option >ngoma
    <option >kirehe
    <option >kayonza
    <option >rwamagana
    <option >nyagatare
    <option >kigali
    <option >gatsibo
    <option >bugesera
    <option >nyarujyenge
    <option >kicukiro
    <option> gasabo
    <option>musanze
    <option >gicumbi
    <option> burera
    <option >rulindo
    <option >nyaruguru
    <option >nyanza
    <option >huye
    <option >gakenke
    <optiona>dminnyabihu
    <option >rusizi
    <option>rutsiro
    <option >rubavu
    <option> nyamasheke
        </select></td></tr>
<tr><td>sector:</td><td><input type="text" name="sector"placeholder="your sector"/></td></tr>

<tr><td>umudugudu:</td><td><input type="text" name="umudugudu" placeholder="your umudugudu"/></td></tr>
<tr><td>telephone:</td><td><input type="number" name="telephoneno" placeholder="your telephone"/></td></tr>
<br>
<tr><td><input type="submit" value="REGISTER"    background-color="skyblue"   font-weight="bolder"></td>
<td><input type="submit"    value="cancel" style="width:100px; margin-left:20px;" ></td></tr></tbody></table>
</form>
</fieldset>
        </div>
        </div>
        <div id="footer">
            <div id="designer"></div>
            <h4><b>Copyright  © jolivet</b></h4>
        </div>
    </div>
</div>
</body>
</html>


