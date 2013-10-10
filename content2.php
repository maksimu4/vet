<?php
 
include('./function_news.php');
?>


<?php
  $query = "SELECT * FROM news";
  $result = mysql_query($query);
if (!$result)
{
	die(mysql_error());
}
$n = mysql_num_rows($result);
$zag = array();
$n_t = array();
 for ($i = 0; $i < $n; $i++)
   {
      $row = mysql_fetch_assoc($result);
      $zag = $row['zagolovok'];
      $n_t = $row['news_text'];
	  $n_t = cut_string($n_t,150);
   
?>

    <h2><?php print $zag ?></h2>
    <p>
        <?php
           print $n_t;
        ?>
        ________________________________________________________________________________
    </p>
    <?php
    }
    ?>
