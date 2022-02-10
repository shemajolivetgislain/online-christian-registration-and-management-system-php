<html>
<head>
<title>database connection</title>
</head>
<body>
    <?php
    $connect= mysql_connect("localhost","root","");
    if(!$connect)
    {
        die('could not connect to your database'.mysql_error());
    }
    echo'';
    mysql_select_db("adepl",$connect);
    ?>
    </body>
    </html>