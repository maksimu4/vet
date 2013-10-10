<?php
require_once('header.php');
 ?>
    <html>
    <head>
    <title>registration</title>
    </head>
    <body>
    
    <div class='content'>
    <h2><?php print $array['REGISTRATION'] ?></h2>
    <form action="saveuser2.php" method="post">
<p>
    <label><?php print $array['LOGIN'] ?> <br></label>
    <input name="login" type="text" size="15" maxlength="15">
</p>
<p>
    <label><?php print $array['PASSWORD']?><br></label>
    <input name="password" type="password" size="15" maxlength="15">
</p>
    <p>
    <label><?php print $array['EMAIL']?><br></label>
    <input name="email" type="email" size="15" maxlength="15">
    </p>
 <p>
    <input type="submit" name="submit" value="Registration">
 </p>
    </form>
</div>
   </body>
    </html>