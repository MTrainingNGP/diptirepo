<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'db';
    mysql_connect($host, $user, $password) or die("failed to connect server"); 
   
    mysql_select_db($database) or die("failed to connect database");

    SESSION_START();

?>
