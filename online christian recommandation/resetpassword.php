<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>reset password</title>
<style type="text/css">
fieldset {
	width:500px;
	border:5px dashed #CCCCCC;
	margin:0 auto;
	border-radius:5px;
}
dl {
	float: right;
	width: 390px;
}

dt {
	width: 180px;
	color: brown;
	font-size: 19px;
}

dd {
	width:200px;
	float:left;
}

dd input {
	width: 200px;
	border: 2px dashed #DDD;
	font-size: 15px;
	text-indent: 5px;
	height: 28px;
}

legend {
	color: blue;
	font-size: 25px;
}


dl {
	float: right;
	width: 390px;
}

dt {
	width: 180px;
	color: brown;
	font-size: 19px;
}

dd {
	width:200px;
	float:left;
}

dd input {
	width: 200px;
	border: 2px dashed #DDD;
	font-size: 15px;
	text-indent: 5px;
	height: 28px;
}

.btn {
	color: #fff;
	background-color: dimgrey;
	height: 38px;
	border: 2px solid #CCC;
	border-radius: 10px;
	float: right;
}

</style>
</head>

<body background="ups/21.jpg">
<?php 
		$conn_db = mysql_connect('localhost','root','') or die();
		$sel_db = mysql_select_db('adepl',$conn_db) or die();
		if(isset($_POST['re_password']))
		{
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		$pass=$_POST['e_mail'];
		$chg_pwd=mysql_query("select * from users where password='$old_pass' AND e_mail='$pass'");
		$chg_pwd1=mysql_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_pass){
		if($new_pass==$re_pass){
			$update_pwd=mysql_query("update users set password='$new_pass' where e_mail='$pass'");
			echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='resetpassword.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong'); window.location='uhome.php'</script>";
		}}
	?>
<form id="form1" name="form1" method="post" action="">
  <table width="1000" align="center" cellpadding="0" background="ups/Page-BgGlare.png">
    <tr>
      <td colspan="3" background="ups/IMG_3375.JPG"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="1000" height="200" align="middle">
        <param name="movie" value="ups/movbest.swf" />
        <param name="quality" value="high" />
        <embed src="ups/movbest.swf" width="1000" height="200" align="middle" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
      </object></td>
    </tr>
    <tr>
      <td width="200"><img src="ups/IMG_3377.JPG" width="200" height="400" /></td>
      <td bordercolorlight="#FFFFFF"> <table width="400" border="0">
	<form method="post">
		<dl>
			<dt>
				Old Password
			</dt>
				<dd>
					<input type="password" name="old_pass" placeholder="Old Password..." value="" required />
				</dd>
		</dl>
		<dl>
			<dt>
				User E_maail
			</dt>
				<dd>
					<input type="e_mail" name="e_mail" placeholder="e_mail..." value="" required />
				</dd>
		</dl>
		<dl>
			<dt>
				New Password
			</dt>
				<dd>
					<input type="password" name="new_pass" placeholder="New Password..." value=""  required />
				</dd>
		</dl>
		<dl>
			<dt>
				Retype New Password
			</dt>
				<dd>
					<input type="password" name="re_pass" placeholder="Retype New Password..." value="" required />
				</dd>
		</dl>
		<tr>
		<td>
		<p align="center">
			<input type="submit" class="btn" value="Reset Password" name="re_password" />
		</p>
		</td>
		</tr>
	</form>
	  </table>
	  </td>
      <td width="200"><img src="ups/boxing.JPG" width="200" height="400" /></td>
    </tr>
    <tr>
      <td colspan="3" align="center" bgcolor="#999999"  background="ups/Page-BgGlare.png"><?php require_once('footer.php'); ?></td>
	  
    </tr>
  </table>
</form>
</body>
</html>
