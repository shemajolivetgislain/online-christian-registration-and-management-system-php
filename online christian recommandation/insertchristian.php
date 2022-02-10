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
<a href="addchristian.php">users registrations</a>