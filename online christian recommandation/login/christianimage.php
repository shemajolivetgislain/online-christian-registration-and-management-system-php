<?php
$msg="";
$image="";
$text="";
if(isset($_POST['upload'])){
    $target="images/".basename($_FILES['image']['name']);
    $db=mysqli_connect("localhost","root","","appointmenttuyj");
    $image=$_FILES['image']['name'];
    $text=$_POST['text'];
    $sql="insert into images (image,text) values('$image','$text')";
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
$db=mysqli_connect("localhost","root","","adepl");
$sql="select*from images";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)){
    echo"<div id='img_div'>";
    echo"<img src='images/".$row['image']."'>";
    echo"<p>".$row['text']."</p>";
    echo "<a href='deletepic.php?id=".$row['id']."'>remove</a>";
    echo"</div>";
}
?>
<br><br><br><br>
<form method="post"action="imageupdate.php" enctype="multipart/form-data">
<input type="hidden"name="size"value="1000000">
<div>
    <input type="file"name="image">
    </div>
    <div>
    <br><br>
    <textarea name="text"cols="40"row="4"placeholder="say samething about this image..."></textarea>
</div>
<div><br>
    <input type="submit"name="upload"value="upload image">
    </div>
</form>
</div>
</body>
</html>