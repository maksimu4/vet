<?php
ob_start();
require_once('header.php');
require_once('bd.php');
include('function_news.php');
if(isset($_POST['submit']))
{
     if(empty($_POST['zagolovok']))
    {
        $cautenter = $array['CAUTTITLE'];
    }
        else 
    {
         $zagolovok= $_POST['zagolovok'];
    }   

         if (empty($_POST['zagolovok2']))
    {
        $cautenter = $array['CAUTTITLE'];
    }
        else
    {
        $zagolovok2= $_POST['zagolovok2'];
    }
     
         if (empty($_POST['news_text'])) 
    {
        $cautenter = $array['CAUTTEXT'];
    }
         else
    {
         $news_text = $_POST['news_text_2'];
    }
         if(empty($_POST['news_text_2']))
    {
        $array2 = parse_ini_file("ru.ini");    
    }
        else
    {
        $news_text_2 = $_POST['news_text_2'];
    }   
        if (!empty($zagolovok) && !empty($zagolovok2) && !empty($news_text) && !empty($news_text_2) ) 
    {  
         $query="INSERT INTO `news` (`zagolovok`, `zagolovok2`, `news_text`, `news_text_2`) VALUES ('$zagolovok', '$zagolovok2', '$news_text', '$news_text_2')";
$result = mysql_query($query);
header("Location: http://www.veterinar.com/index.php");
    }
} 
ob_flush();
?>
<form class="content" method="post">
<h3><?php print $array['NEWARTICLE'] ?></h3> 
<p><?php print $array['ZAGOLOVOK'] ?></p>
<input style="width: 550;" type="text" name="zagolovok"/>
<p><?php print $array['ZAGOLOVOK2'] ?></p>
<input style="width: 550;" type="text" name="zagolovok2"/>
<p><?php print $array['NEWS_TEXT'] ?></p>
<textarea style="width: 550; height: 150;" name="news_text"></textarea>
<p><?php print $array['NEWS_TEXT2'] ?></p>
<textarea style="width: 550; height: 150;" name="news_text_2"></textarea><p>
<input type="submit" name="submit" value="OK"/>
<p> </p>
</form>

