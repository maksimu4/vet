<?php
ob_start();
require_once('header.php'); 
require_once('bd.php');
$cautenter='';

if(isset($_POST['submit']))
{
         if (empty($_POST['question']))   
            {
              $cautenter = $array['CAUTENTER1'];
            }
            
      $question=stripslashes($_POST['question']);
      $question = htmlspecialchars($question);

      $query = "INSERT INTO `questionvet`(`question`) VALUES ('$question')";
      $result = mysql_query($query);
      $ts=1;
      
    
 header("Location:forum.php");
}
ob_flush();
?>

<div class="content"  >
	<?php print $array['ENTERQUESTION'] ?>
<form method="post" >
 <textarea rows="10" cols="100" name="question" maxlength="1000"></textarea>
<input type="submit" name="submit" value="send">
<input type="reset" value="reset">

</form>
</div>

<?php
require_once ("footer.php");
?>
