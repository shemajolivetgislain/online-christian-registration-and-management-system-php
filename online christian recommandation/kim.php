<html>
<head>
<style>
   img {
        height:50%;
        width:20%;
        border-radius:100%;
    }
</style>
</head>

<?php
$msg="";
$image="";
$text="";
if(isset($_POST['upload'])){
    $target="images/".basename($_FILES['image']['name']);
    $db=mysqli_connect("localhost","root","","adepl");
    $image=$_FILES['image']['name'];
    $payfname=$_POST['afname'];    
    $paylname=$_POST['alname'];
    $paydepartment=$_POST['paydepartment'];
    $payparcelcode=$_POST['payparcelcode'];
    $payamount=$_POST['payamount'];
    $paydate=$_POST['paydate'];
    $sql="insert into paymentdb
     (image,payfname,paylname,paydepartment,payparcelcode,payamount,paydate)values('$image',' $payfname','$paylname','$paydepartment','$payparcelcode','$payamount','$paydate')";
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
<link rel="stylesheet"type="text/css"href="images.css">
</head>
<body>
<center>
<div id="content"><br>
    
    <font size="7" color="blue"> welcome  to beneficiary ulbum</font>
<?php
include('dbconnect.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from paymentdb where id='$id'");
if($query1)
{
echo "One record has been deleted!!";
}
}
?>
<br>
<br>
Please,
<a href="paymentform.php">add new</a>
</body>
</html>

<?php
$db=mysqli_connect("localhost","root","","prison");
$sql="select*from paymentdb";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)){
    echo"<div id='img_div'>";
    echo"<p>".$row['payfname']."</p>";
        echo"<p>".$row['paylname']."</p>";
    echo"<p>".$row['paydepartment']."</p>";
    echo"<p>".$row['payparcelcode']."</p>";
    echo"<p>".$row['payamount']."</p>";
    echo"<p>".$row['paydate']."</p>";
        echo"<img src='images/".$row['image']."'>";
        echo "<a href='kim.php?id=".$row['id']."'>Delete</a>";

    echo"</div>";
}
?>
<br><br><br><br>
