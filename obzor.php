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

$result = mysqli_query($con,"SELECT  `Clinic_name` ,  `Clinic_address` , `Clinic_contacts` FROM `allclinics` WHERE `Id_city`={$a} ");

while($row = mysqli_fetch_array($result))
    {
      echo "<br> <br>$row[Clinic_name]"." <br> "."$row[Clinic_address]"."<br>"."$row[Clinic_contacts]"." <br>"; 
    }


?>
</form>


