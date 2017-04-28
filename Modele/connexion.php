<?php
    $dbname = "dohome";
    $host='localhost:3307';
    $user='root';
    $pass='root';

    $db = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
    $db->query("SET NAMES UTF8");
?>