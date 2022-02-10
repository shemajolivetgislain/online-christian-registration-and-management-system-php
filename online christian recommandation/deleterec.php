<html>
<header>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<style>
#delete{
    background-image:url(images/we.jpg);
    width:30%;
    height:20%;
    color: white;
    margin-left: 100px;
    margin-top: 100px;
}
 a{
color:tan;
margin-left:110px;
}
 a:hover{
background-color:yellow;
}
 a:focus{
text-shadow:0 0 8px 0 blue;
}
</style>
</header>
<body>
<div id="delete">
<?php
include('dbconnect.php');
if(isset($_GET['aid']))
{
$aid=$_GET['aid'];
$query1=mysql_query("delete from registration where aid='$aid'");
if($query1)
{
echo "One record has been deleted!!";
}
}
?>
<br>
<br>
<a href="christianlist.php"><i class="fa fa-trash-o"></i>&nbsp;return to list</span></a>
</div>
</body>
</html>