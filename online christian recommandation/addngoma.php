<?php include('headerN.php'); ?> 

<html>
    <header>
        <style>
        h3 {
text-align:center;
border-radius:10px 10px 0 0;
margin:-10px -40px;
padding:15px;
font-family: algerian;
}

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
width:65%;
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
    font-family:elephant  bold;
    
}
input[type=text],input[type=date],select:focus{
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

        <body>
           <div id="wallpaper">
       <div id="left">
        <div id="lef"><br><br>    <h3><i class="fa fa-link" aria-hidden="true"></i>QUICK LINK</H3>
                     <div class="column men">
    <ul>
      <li> <a href="addngoma.php">add christian</a></li>
      <li><a href="work3.php">add workers</a></li>
      <li><a href="listngoma.php">listofchristian</a></li>
      <li><a href="listworkers.php">volunterslist</a></li>
    </ul>
  </div>
        </div>
        </div>
        <div id="content" style="overflow: scroll;">
        <br><br>
        
        
        
    <fieldset style="width:700px;height:670px;border-color:whiteorange;background-color:#ffffff;">
    <i class="fa fa-user-circle-o" style="margin-top:-39px;font-size:90px;margin-left:5px;color:black;border-radius:85px;background-color:#333;"></i>
    
		
<br>
<br>
<table style:"padding-left:-20px;">

	<form action="insertchristian.php" method="POST" enctype="multipart/form-data">

   <tr><td><p>image:</p></td>
   <td><input type="file" name="image" placeholder="christian image"/>
      <tr><td ><p>first Names:</p></td>
   <td><input type="text" name="afname" placeholder="  .........firstname....."title="please enter username" required="required"/>
   <td></tr>
     <td><p>last name:</p></td>
 <td><input type="text" name="alname"placeholder="lastname"title="please enter username" required="required"/></td><tr>
<tr><td><p>fathername:<p></td>
<td><input type="text" name="afathername"placeholder="your father name"title="please enter username" required="required"/></td></tr>
<tr><td><p>mothername:</p></td>
<td><input type="text" name="amothername"placeholder="your mother name"title="please enter username" required="required"/></td></tr>
<tr><td><p>birth region:</p></td>
<td><select  name="region"title="please enter username" required="required">
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
        </select></td></tr>
<tr><td><p>date of birth</p></td>
<td><input type="date" name="aage"placeholder="your age"title="please enter username" required="required"/></td></tr>
<tr><td><p>gender:</p></td>
<td><select  name="asex">
          <option value="">select your gender
    <option >MALE
    <option >FEMALE
</select><td></tr>
<tr><td><p>date of baptise:</p></td>
<td><input type="date" name="dateofbaptise"placeholder="your gender"title="please enter username" required="required"/></td></tr>
<tr><td><p>cell:</p></td>
<td><input type="text" name="cell"placeholder="umudugudu"title="please enter username" required="required"/></td></tr>
<tr><td><p>sector:</p></td>
<td><input type="text" name="asector"placeholder="yoursector"title="please enter username" required="required"/></td></tr>
<tr><td><p>district:</p></td>
<td><input type="text" name="adistrict"placeholder="your district"title="please enter username" required="required"/></td></tr>
<tr><td><p>province</p></td>
<td><select  name="province"title="please enter username" required="required">
          <option value="">select province
    <option >eastern
    <option >western
    <option >northern
    <option >southern
    <option >kigali
    </select></td></tr>
<tr><td><input type="submit" name="upload" value="REGISTER"></td>
<td><input type="submit"value="cancel"> </td></tr></tbody></table>
</form>
</fieldset>
        </div>
        </div>
        <div id="footer">
            <div id="designer"></div>
            <h4><b>Copyright &copy jolivet</b></h4>
        </div>
    </div>
    </div>
    </center>
</body>
</html>


