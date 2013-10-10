
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

$result = mysqli_query($con,"SELECT  `pharmacy_name` ,  `pharmacy_address` , `pharmacy_contacts` FROM `allpharmacy` WHERE `Id_city`={$a} ");

while($row = mysqli_fetch_array($result))
  {
   echo "<br> <br>$row[pharmacy_name]"." <br> "."$row[pharmacy_address]"."<br>"."$row[pharmacy_contacts]"." <br>"; 
  }

//mysqli_close($con);// Query
//$sql="INSERT INTO  `allclinics` (  `City` ,  `Clinic_name` ,  `Clinic_address` ,  `Clinic_contacts` ) VALUES ('$_GET[city]',  'Poliklinika',  'Pushkina Str.',  '56-45-26')";
?>
</form>



