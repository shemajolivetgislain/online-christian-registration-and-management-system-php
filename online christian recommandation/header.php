<?php include('session.php');?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforadminpage.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <title> adepr</title>
    <link rel="shortcut icon" href="a.jpg"/>
    <style>
 b{
        margin-top:50px;
    }
    </style>
</head>
<body>
    <center>
    <div id="wallpa">
        <div id="header">
          <h1><b></b></h1>
            <div id="logo"></div></div>
      <div id="menutop">
          <ul class="menu">
<li><a href="adpl.php"><span><i class="fa fa-home"></i>&nbsp;HOME</span></a></li>
<li><a href="christianlist.php"><span><i class="fa fa-list"></i>&nbsp;christianlist</span></a>
</li>

</li>
<li class="active"><a href="#s2"><span><i class="fa fa-plus-circle"></i>&nbsp;add</span></a>
<ul class="submenu">
<li><a href="addusers.php"><i class="fa fa-plus-cirle"></i>&nbsp;ADDUSERS</span></a></li>
<li><a href="addchristian.php"><i class="fa fa-plus-square"></i>&nbsp;ADDchristian</span></a></li>
</ul>
</li>
<li><a href="contact.php"><span><i class="fa fa-phone"></i>&nbsp;contact</span></a</a></li>
<li><a href="aboutas.php"><span><i class="fa fa-info-circle"></i>&nbsp;aboutus</span></a></li>
<li><a href="logout.php"><span><i class="fa fa-POWER-OFF"></i>&nbsp;logout</span></a></li>
<li style="margin-top:9px; margin-left:290px; color: white;">Welcome :<i class="fa fa-user-circle"></i> <i><?php echo $login_session; ?></i></li>
</ul> 

    </div>