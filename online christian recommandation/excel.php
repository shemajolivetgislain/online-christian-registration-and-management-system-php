<?
header('content-disposition: attachement;
filename=yourdocument.doc');
header('content-type: document/pdf');
readfile('yourfile.doc');
?>  