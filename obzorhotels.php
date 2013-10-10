<?php
require_once('header.php');
?>
<form class="content" method="post">
<?
$con=mysqli_connect("localhost", "root", "", "vetbase");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $a = intval($_GET['Id_city']);

$result = mysqli_query($con,"SELECT  `hotels_name`,`hotels_address`,`hotels_contacts` FROM `allhotels` WHERE `Id_city`={$a} ");

while($row = mysqli_fetch_array($result))
  {
   echo "<br> <br>$row[hotels_name]"." <br> "."$row[hotels_address]"."<br>"."$row[hotels_contacts]"." <br>"; 
  }

//mysqli_close($con);// Query
//$sql="INSERT INTO  `allclinics` (  `City` ,  `Clinic_name` ,  `Clinic_address` ,  `Clinic_contacts` ) VALUES ('$_GET[city]',  'Poliklinika',  'Pushkina Str.',  '56-45-26')";
?>
</form>


