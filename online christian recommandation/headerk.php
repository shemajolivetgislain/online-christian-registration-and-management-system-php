<?php include('session.php');?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="adminkigalistyle.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <title> adepr</title>
    <link rel="shortcut icon" href="a.jpg"/>
</head>
<body>
    <center>
    <div id="wallpa">
        <div id="header">
          <h1><b></b></h1>
            <div id="logo"></div></div>
      <div id="menutop">
          <ul class="menu">
<li><a href="adminkigali.php"><span><i class="fa fa-home"></i>&nbsp;HOME</span></a></li>
<li><a href="listkigali.php"><span><i class="fa fa-list"></i>&nbsp;christianlist</span></a>
</li>
<li class="active"><a href="addchrist1.php"><span><i class="fa fa-user-plus"></i>&nbsp;addchristian</span></a>
</li>
<li><a href="recommandation.php"><span><i class="fa fa-address-book"></i>&nbsp;recommandation</span></a>
</li>
<li><a href="contactk.php"><span><i class="fa fa-phone"></i>&nbsp;contact</span></a</a></li>
<li><a href="aboutk.php"><span><i class="fa fa-info-circle"></i>&nbsp;aboutus</span></a></li>
<li><a href="logout.php"><span><i class="fa fa-POWER-OFF"></i>&nbsp;logout</span></a></li>
<li style=" color: white;margin-top:7px;margin-left:17px">Welcome :<i class="fa fa-user-circle"></i> <i><?php echo $login_session; ?></i></li>
</ul> 
    </div>
    