<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE>christian record</TITLE>
  </HEAD>
<body>
 <center><a href="addusers.html"><u>Back to the patient Form</u></a> </center>
 <!--php codes to select/display/show/query the inserted records--> 
  <?php
mysql_connect('localhost','root','') or die('error to connect');
mysql_select_db('adepl');
$query=("SELECT ufname,ulname,usector,udistrict,uprovince,uusername,upassword FROM username");
$result=mysql_query($query) or die('could not select the records:'.mysql_error());
$num=mysql_num_rows($result);
?>

<p align="center"><I><font color="#FF0000" size="6">users records</font></I></p>

<table border="1" align="center">
<tr>
<td><b>First Name</b></td>
<td><b>Last Name</b></td>
<td><b>sector</b></td>
<td><b>district</b></td>
<td><b>province</b></td>
<td><b>username</b></td>
<td><b>password</b></td>
</tr>

<?php
$count=1;
while($row=mysql_fetch_array($result)){
	?>
    <tr>
    <td><?php echo $row ['ufname'];?> </td>
    <td><?php echo $row ['ulname'];?></td>
    <td><?php echo $row ['usector'];?></td>
    <td><?php echo $row ['udistrict'];?></td>
    <td><?php echo $row ['uprovince'];?></td>
  <td><?php echo $row ['uusername'];?></td>
  <td><?php echo $row ['upassword'];?></td>
    </tr>
    <?php
	$count++;	
}
?>
<!--end of codes of select/display/show/query the inserted records-->
 </BODY>
</HTML>