<?php include('header.php'); ?>

        <style>
        h3 {
text-align:center;
border-radius:10px 10px 0 0;
margin:-10px -40px;
padding:15px
}

input[type=text],input[type=password],input[type=date],select {
width:99.5%;
padding:5px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:raleway
}
input[type=submit] {
width:100%;
background-color:#1A2421;
color:#fff;
border:2px solid black;
padding:2px;
font-size:20px;
cursor:pointer;
border-radius:5px;
}
input[type=text],input[type=date],select:focus{
  box-shadow:0 0 8px 0;
}
a{
    border-left: 3px solid rgba(0, 0, 0, 0);
color: #fff;
display: block;
font-family:elephant;
font-size: 12px;
line-height:22px;
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
    padding: 10px;
    margin-bottom: 1px;
    background-color: #dda250;
    color: black;
}
.men li:hover {
    background-image:url(images/14.jpg);
}
        </style></header>
      <body>
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

<div id="content" style="overflow:scroll;"><BR><br>
 <fieldset style="width:500px;height:730px;border-color:whiteorange;background-color:#ffffff;">

<i class="fa fa-user-circle-o" style="margin-top:-39px;font-size:90px;margin-left:5px;color:black;border-radius:85px;background-color:#333;"></i>

<table>
	<form action="insertuser.php" method="POST">
<h3><b>USERS REGISTRATION FORM</b></h3><br><table>

<tbody><tr><td> <b>first Names:</b><td><input type="text" name="ufname"placeholder="firstname"title="" required="required"/></td></tr>
<tr><td><b>last name:</b></td><td><input type="text" name="ulname"placeholder="lastname"title="please enter field" required="required"/></td></tr>
<tr><td><b>asex:</b></td><td><select  name="sex"title="please enter username" required="required">
          <option value="">select province
    <option >eastern
    <option >western
        </select></tr>
<tr><td><b>sector:</b></td><td><input type="text" name="usector"placeholder="your father name"title="please enter field"required="required"/></td></tr>
<tr><td><b>district:</b></td><td><input type="text" name="udistrict"placeholder="your mother name"title="please enter username" required="required"/></td></tr>
<tr><td><b>province:</b></td><td><select  name="uprovince"title="please enter field"required="required">
          <option value="">select province
    <option >eastern
    <option >western
    <option >northern
    <option >southern
    <option >kigali
        </select></tr>
<tr><td>email: </td><td><input type="email" name="email"placeholder="your age"title="please enter field"required="required"/></td></tr>
<tr><td>telephone:</td><td><input type="text" name="telephone"placeholder="your telephone"title="please enter field"required="required"/></td></tr>
<tr><td>nation id:</td><td><input type="text" name="national"placeholder=" your national id"title="please enter field"required="required"/></td></tr>
<tr><td>cell:</td><td><input type="text" name="cell"placeholder="cells"title="please enter field"required="required"/></td></tr>
<tr><td>username:</td><td><input type="text" name="username"placeholder="username"title="please enter field"required="required"<input type="button"name="submit" onclick="window.print()" size="21" value="print"/>/></td></tr>
<tr><td>password:</td><td><input type="password" name="password"placeholder="your password"/></td></tr>
<tr><td><input type="submit" value="REGISTER">
<td><input type="submit"value="cancel" ></td></tr></tbody></table></fieldset>
</form>
</fieldset>
        </div>
        </div>
        </div>
        <div id="footer">
            <div id="designer"></div>
            <h4><b>Copyright  © jolivet</b></h4>
        </div>
    </div>
  
    </center>
</body>
</html>