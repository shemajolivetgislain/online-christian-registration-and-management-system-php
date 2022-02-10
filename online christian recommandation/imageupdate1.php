<?php
$msg="";
$image="";
$text="";
if(isset($_POST['upload'])){
    $target="images/".basename($_FILES['image']['name']);
    $db=mysqli_connect("localhost","root","","adepl");
    $image=$_FILES['image']['name'];
    $afname=$_POST['afname'];
      $alname=$_POST['alname'];  
       $amothername=$_POST['amothername'];   
      $afathername=$_POST['afathername'];
      $region=$_POST['region']; 
      $aage=$_POST['aage'];
       $asex=$_POST['asex'];
      $dateofbaptise=$_POST['dateofbaptise'];
      $cell=$_POST['cell'];
      $asector=$_POST['asector'];
       $adistrict=$_POST['adistrict'];  
        $province=$_POST['province'];       
     $sql="insert into registration (image,afname,alname,amothername,afathername,region,aage,asex,dateofbaptise,cell,asector,adistrict,province) values('$image','$afname','$alname','$amothername','$afathername','$region','$aage','$asex','$dateofbaptise','$cell','$asector','$adistrict','$province')";
    mysqli_query($db,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        $msg="image uploaded successfully";
     }else{
         $msg="there was a problem uploading image";
     }
}
?>
<html>
<head>
<title>upload image</title>
<link rel="stylesheet" type="text/css" href="images.css">
</head>
<body>
<center>
<div id="content"><br>
    <font size="7" color="blue"> welcome  to drivers</font>
<?php
$db=mysqli_connect("localhost","root","","adepl");
$sql="select * from registration";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)){
    echo"<div id='img_div'>";
    echo"<img src='images/".$row['image']."'>";
    echo"<p>".$row['afname']."</p>";
    echo"<p>".$row['alname']."</p>";
    echo"<p>".$row['amothername']."</p>";
    echo"<p>".$row['afathername']."</p>";
    echo"<p>".$row['region']."</p>";
    echo"<p>".$row['aage']."</p>";
    echo"<p>".$row['aage']."</p>";
    echo"<p>".$row['asex']."</p>";
    echo"<p>".$row['dateofbaptise']."</p>";
    echo"<p>".$row['cell']."</p>";
    echo"<p>".$row['asector']."</p>";
    echo"<p>".$row['adistrict']."</p>";
    echo"<p>".$row['province']."</p>";
    echo "<a href='delete.php?aid=".$row['aid']."'>remove</a><br>";
    echo "<a href='updatepic.php?did=".$row['aid']."'>update</a>";
    echo"</div>";
}
?>

<html>
<head>
<title>driver records</title>
<link rel="stylesheet" type="text/css" href="images.css">
</head>
<body>
    <font size="7" color="blue"> welcome  to driver records</font>
<a href="imageupdate1.php">add new</a>
<font color="blue">
<?php
include('dbconnect.php');
if(isset($_GET['aid']))
{
$did=$_GET['aid'];
$query1=mysql_query("delete from registration where aid='$aid'");
if($query1)
{
echo "successfull deleted";
}
}
?>
</font>
<br><br><br><br>
<form method="post" action="imageupdate1.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
    <input type="file" name="image">
    </div>
    <div>
    <br><br>
   firstname:<input type="text" name="afname" placeholder="fname">
    <input type="text" name="alname" placeholder="lname">
    <input type="text" name="amothername" placeholder="didentity">
    <input type="text" name="afathername" placeholder="dlicense">
    <input type="text" name="region" placeholder="dprovince">
    <input type="text" name="aage" placeholder="ddistrict">
    <input type="text" name="asex" placeholder="sector">
    <input type="text" name="dateofbaptise" placeholder="dtel">
    <input type="text" name="cell" placeholder="demail">
     <input type="text" name="asector" placeholder="demail">
     <input type="text" name="adistrict" placeholder="demail">
     <input type="text" name="province" placeholder="demail">
</div>
<div><br>
    <input type="submit" name="upload" value="upload image">
    </div>
</form>
</div>
</body>
</html>