<!DOCTYPE html>
<html>
<head>
	<title>letter</title>
   <style>
       text{
           font-family:mv boli;
            border-bottom:  1px dotted;
       }
  h3{
      color:black;
      text-transform:uppercase;
      margin-left:-80px;
  }
p{
  font-family:century;
   font-size:15px;  
   font-weight:20px;
   
  }

  tr td{
      
  }
   </style>
        <script type="text/javascript">
function printdiv(body) {
 var printContents = document.getElementById(body).innerHTML;
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}
</script>

</head>
  <div id="print-content">

<body>
<center>
<fieldset style="width:700px;height:670px;border-color:white;background-color:rgb(240, 240, 240);">
<img src="w.jpg">
        
    <?php

include('dbconnect.php');
$query1=mysql_query("select * from recommandation order by rid DESC");
if($query2=mysql_fetch_array($query1))
{


     echo" <div class='top'>
    
<h3><u>Icyemezo cyubuhamya bwumukristo</u></H3>
  <p style='margin-left:-10px;margin-top:10px;'>Twebwe abayobozi ba adepr &nbsp;<b>".$query2['parishname']."</b>,turemeza ko uyumwedata/mushishi wacu</p>

   <text style=' margin-left:-300px;margin-top:-30px; font-weight:bold;'>".$query2['names']."</text>

   <p>Yasengerega muri adepr  <text><b>".$query2['parishname']."</b></text>  turashima mumyizerere no mumico ya gikristo.</p>
  <p style='margin-left:-385px;'>Impanvu yu rugendo rwe</p>
  <p style='margin-left:-160px; '>Akabagiye mwitorero ryakarere rya &nbsp;&nbsp;&nbsp;&nbsp;<b><text>".$query2['district']."</b></text>&nbsp;&nbsp;&nbsp;&nbsp; muri<p style='margin-left:-240px;'><p style='margin-left:-280px;'>Pariosse ya&nbsp;<text>".$query2['parish']."</text>&nbsp; umudugudu wa </p>
  <p style='margin-left:-480px;'><text><b>".$query2['umudugudu']."</b></text></p>           
  <p style='margin-left:-75px;'> Uruhushya rutangiye tariki ya  <text><b> ".$query2['givedate']."</b></text> kugeza kuwa   <b>".$query2['validate']." </b>     

   <p style='margin-left:-310px;'>Bikorewe <text><b>".$query2['place']."</b></text> ,Kuwa <text><b>".$query2['todate']."</b></text> <br><br>       
  <p style='margin-left:-270px;'>Umuyobozi wa adepr pariosse <text><b>".$query2['parishname']."</B></text></p>
       <p> <text><b style='margin-left:-390px;'>".$query2['pastorname']."</B></text></p>
      <p style='margin-left:-80px;text-transform:uppercase;'><b>N.B:tumuhaye ikicyemezo ni cya recomandation.</B></p>
     <p style='margin-left:-278px;text-transform:uppercase;'><b>contant:0789445897;0726254095</b> ";
          echo"</div>";  
}
        ?>
        </fieldset>
        </div>
                </body>
                        </html>

   <input type="button" onclick="printdiv('print-content')" value="PrintReport!"/>
 
