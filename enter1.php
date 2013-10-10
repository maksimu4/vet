<?php
    session_start();
    require_once('header.php');
?>
    <html>
    <head>
    <title>MAIN</title>
    </head>
    <body>
    <h2>MAIN</h2>
    <form action="testreg.php" method="post" class='content'>
 <p>
    <label><?php print $array['LOGIN'] ?><br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
 <p>

    <label><?php print $array['PASSWORD']?><br></label>
    <input name="password" type="password" size="15" maxlength="15">
 </p>
 <p>
    <input type="submit" name="submit" value="ENTER">
<br>

    </p></form>
    <br>
    <?php
    
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
    }
    else
    {
    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='http://tvpavlovsk.sk6.ru/'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
    }
    ?>

    </body>
    </html>