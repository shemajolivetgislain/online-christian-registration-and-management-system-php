<?php include('header.php'); ?>
<br>
<table>
	<form action="insertuser.php"method="POST">
<p></p><h3><u><b>person REGISTRATION FORM</b></u></h3><p></p><br><table>

<tbody><tr><td> first Names:<td><input type="text" name="ufname"placeholder="firstname"/></td></tr>
<tr><td>last name:</td><td><input type="text" name="ulname"placeholder="lastname"/></td></tr>
<tr><td>sex:</td><td><input type="text" name="sex"placeholder="your father name"/></td></tr>
<tr><td>sector:</td><td><input type="text" name="usector"placeholder="your father name"/></td></tr>
<tr><td>district:</td><td><input type="text" name="udistrict"placeholder="your mother name"/></td></tr>
<tr><td>province:</td><td><select  name="uprovince">
          <option value="">select province
    <option >eastern
    <option >western
    <option >northern
    <option >southern
    <option >kigali
        </select></tr>
<tr><td>email: </td><td><input type="email" name="email"placeholder="your age"/></td></tr>
<tr><td>telephone:</td><td><input type="text" name="telephone"placeholder="your telephone"/></td></tr>
<tr><td>nation id:</td><td><input type="text" name="national"placeholder=" your national id"/></td></tr>
<tr><td>cell:</td><td><input type="text" name="cell"placeholder="cells"/></td></tr>
<tr><td>username:</td><td><input type="text" name="username"placeholder="username"/></td></tr>
<tr><td>password:</td><td><input type="password" name="password"placeholder="your password"/></td></tr>
<tr><td><input type="submit" value="REGISTER"    background-color="skyblue"   font-weight="bolder">
<input type="submit"value="cancel" </td></tr></tbody></table>
</form>
</fieldset>
        </div>
        </div>
        <div id="footer">
            <div id="designer"></div>
            <h4><b>Copyright  © jolivet</b></h4>
        </div>
    </div>
    <script src="js/index.js"></script>
    </center>
</body>
</html>