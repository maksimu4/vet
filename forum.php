<?php
require_once ("header.php"); 
require_once("bd.php");
?>
<?php
$query = "SELECT * FROM `questionvet`  ORDER BY `Id` DESC ";
$result = mysql_query($query);
if (!$result)
{
	die(mysql_error());
}
$n = mysql_num_rows($result);
$zag = array();
for ($i = 0; $i < $n; $i++)
   {
      $row = mysql_fetch_assoc($result);
      $zag[$i] = $row['question'];
   }
      ?>
<h2><form class="content"><?php 


   foreach ($zag as $trtr)
  {
     echo "$trtr <br />";
  } 

?>
 <input type="button" value="back" onclick="history.back()"> <input type="submit" value="update" name="submit"><br/></h2></form>

    <p>
        <?php
           print $n_t;
        ?>
        __________<br/>
    </p>  
