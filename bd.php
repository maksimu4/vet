<?php
        $db_user = 'root';
        $db_password = '';
        $database = 'vetbase';
        mysql_connect($db_host, $db_user, $db_password);
        mysql_select_db($database);
        mysql_query("SET NAMES 'utf8'");
?>