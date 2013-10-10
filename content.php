
<?php
require_once('header.php');
include('function_news.php');
require_once('bd.php');
?>
<div class="content" method="post">
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
      
	  if ($_GET['id']!=1) 
		{ 
			$n_t = cut_string($n_t,150);
		}

?> 
    <h2><?php echo $zag; ?></h2><br/>
    <p>
        <?php
           print $n_t;
        ?>
        __________<br/>
    </p>  
    <a href=content.php?id=1> <?php print $array['READMORE'] ?> </a> <p>
     
    <?php
        	}
    ?>
  </div>