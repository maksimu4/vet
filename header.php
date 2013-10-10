<?php
session_start();
require_once('bd.php');
require_once('parse_ini.php');
?>
<!DOCTYPE html PUBLIC ""-//W3C//DTD XHTML 1.1//EN"" ""http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"">
<html>
<head>
<title> Veterinar.ua </title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="css/1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="head"> 
  <a href="index.php"><img src="picture/192.jpg"></a>
</div>

 <div class="menu">
 	 <div class="button1"> <a href="looking_for.php"> <img src="picture/204.JPG"></a> </div>
 	 <div class="button2"> <a href="buy_me.php"> <img src="picture/205.JPG"></a> </div>
 	 <div class="button3"> <a href="take_me.php"> <img src="picture/206.JPG"></a></div>
 </div>

 <div class="left_side">
     <div class="meenu"><ul id="menuu">
      <li><a href="search.php"><?php print $array['SEARCH'] ?></a></li>
      <li><a href="enter1.php"><?php print $array['ENTER'] ?></a></li>
      <li><a href="saveuser1.php"><?php print $array['REGISTRATION'] ?></a></li>
    <li><a href="clinics.php"><?php print $array['CLINICS'] ?></a></li>
    <li><a href="pharmacy.php"><?php print $array['PHARMACY'] ?></a></li>
    <li><a href="refuge.php"><?php print $array['SHELTERS'] ?></a></li>
    <li><a href="hotels.php"><?php print $array['HOTELS'] ?></a></li>
    </ul> </div>
 </div>



<div class="question">
  <a href="question.php"><img src="picture/vopros4.png"></a>

</div>

<div class="info">
  <a href="obzor.php">obzor</a>
   <a href="news_form.php"><?php print $array['ADDNEWS'] ?></a>
   <a href="dobavanketu.php">ANKETA KORUSTYVACHA</a>
   <p>
   	<a href="index.php?lng=ua"> <img src="picture/Ukraine.png"></a>
   	<a href="index.php?lng=ru"> <img src="picture/RussianFederation.png"></a>
   	<a href="index.php?lng=en"> <img src="picture/England.png"></a>
   </p>
   
</div>
