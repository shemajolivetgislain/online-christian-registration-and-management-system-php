<?php include('headerk.php'); ?>   
<html>
    <header>
    <style>
  input[type=text],input[type=password] {
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
background-color:royalblue;
color:#fff;
border:2px solid black;
padding:2px;
font-size:17px;
cursor:pointer;
border-radius:3px;
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
   <fieldset style="width:650px;height:790px;border-color:whiteorange;background-color:#ffffff;">
    <i class="fa fa-user-circle-o" style="margin-top:-39px;font-size:90px;margin-left:5px;color:black;border-radius:85px;background-color:#333;"></i>
        <div class="navigation">

</div>
<br>
<table>
	<form action="insertchristian.php"method="POST">
<h3><b>pastor your able to register your christian</b></h3><br><table>
<tbody><tr><td> first Names:<td><input type="text" name="afname"placeholder="firstname"title="please enter username" required="required"/></td></tr>
<tr><td>last name:</td><td><input type="text" name="alname"placeholder="lastname"title="please enter username" required="required"/></td></tr>
<tr><td>fathername:</td><td><input type="text" name="afathername"placeholder="your father name"title="please enter username" required="required"/></td></tr>
<tr><td>mothername:</td><td><input type="text" name="amothername"placeholder="your mother name"title="please enter username" required="required"/></td></tr>
<tr><td>birth region:</td><td><select  name="region"title="please enter username" required="required">
          <option value="">select birth region
    <option >ngoma
    <option >kirehe
    <option >kayonza
    <option >rwamagana
    <option >nyagatare
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
        </select></tr>
<tr><td>date of birth</td><td><input type="date" name="aage"placeholder="your age" title="please enter username" required="required"/></td></tr>
<tr><td>gender:</td><td><select  name="asex">
          <option value="">select your gender
    <option >MALE
    <option >FEMALE

<tr><td>date of baptise:</td><td><input type="date" name="dateofbaptise"placeholder="your gender"title="please enter username" required="required"/></td></tr>
<tr><td>cell:</td><td><input type="text" name="cell"placeholder="your gender"title="please enter username" required="required"/></td></tr>
<tr><td>sector:</td><td><input type="text" name="asector"placeholder="yoursector"title="please enter username" required="required"/></td></tr>
<tr><td>district:</td><td><input type="text" name="adistrict"placeholder="your district"title="please enter username" required="required"/></td></tr>
<tr><td>province:</td><td><select name="province" title="please enter username" required="required">
          <option value="">select province
    <option >eastern
    <option >western
    <option >northern
    <option >southern
    <option >kigali
    </select>
    </tr>
    
<tr><td><input type="submit" value="REGISTER"    background-color="skyblue"   font-weight="bolder">
<td><input type="submit"value="cancel" style="width:50px;"> </td></tr></tbody></table>
</form>
</fieldset>
        </div>
        </div>
 <?php include('foooter2.php'); ?>>
    </div>
    </div>
    <script src="js/index.js"></script>
    </center>
</body>
</html>


