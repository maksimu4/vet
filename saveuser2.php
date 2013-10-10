<?php
require_once('bd.php');
$cautenter='';
if (isset($_POST['login'])) 
{
 	    $login = $_POST['login']; 
 	    if ($login == '') 
 	       {
 	         unset($login);
         }
} 
if (isset($_POST['password']))
{ 
      $password=$_POST['password']; 
      if ($password =='') 
 	      {
 	        unset($password);
 	      }
}
if (isset($_POST['email'])) 
  {
   $email = $_POST['email']; 
   if ($email == '') 
      {
        unset($email);}
      } 
   
 if (empty($login) or empty($password) or empty($email))
    {
       exit ("Введена не вся інформація");
    }
        $login = stripslashes($login);
        $login = htmlspecialchars($login);
        $password = stripslashes($password);
        $password = htmlspecialchars($password);
        $email = stripslashes($email);
        $email = htmlspecialchars($email);
        $login = trim($login);
        $password = trim($password);
        $email = trim($email);
 
      
      $sql1="SELECT * FROM `reg_users` WHERE `login` LIKE '$login'";
      
      $result = mysql_query($sql1);
      
      if (!$result)
                 {
                   die(mysql_error());
                 }
      else
                 {
                    $myrow = mysql_fetch_array($result);
                 }

    if (!empty($myrow['id']))
     {
        exit ("Вибачте, введений вами логін вже зареєстрований, введіть інший");
     }
 
    $result2 = mysql_query ("INSERT INTO reg_users (login,password,email) VALUES('$login','$password','$email')");
       
    if ($result2=='TRUE')
       {
          echo "Ви успішно зареєстровані! Тепер ви можете зайти на сайт <a href='index.php'>Головна сторінка</a>";
       }
    else 
       {
          echo "Помилка. Ви не зареєстровані";
       }  
         
?> 
    <a href="index1.php">ENTER</a> 