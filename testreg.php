<?php
session_start();
include_once ("bd.php");
$cautenter = '';
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
    
if (empty($login) or empty($password)) 
    {
       exit ("Інформація введена не повністю");
    }
    
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
 
    $login = trim($login);
    $password = trim($password);
     
    
    $result = mysql_query("SELECT * FROM reg_users WHERE login='$login'");  
    
     if (!$result)
                 {
                   die(mysql_error());
                 }
      else
                 {
                    $myrow = mysql_fetch_array($result);
                    
                 }



    if (empty($password))
      {
        exit ("Ви не ввели пароль");
      }
         else 
         {

           if ($myrow['password']==$password) 
             {
               $_SESSION['login']=$myrow['login']; 
               $_SESSION['id']=$myrow['id'];
                echo "Ви успішно зайшли на сайт <a href='index.php'>Головна сторінка</a>";
             }

          else 
            {
                exit ("Вибачте, введені вами пароль або логін не вірні");
            }
         }
 ?>