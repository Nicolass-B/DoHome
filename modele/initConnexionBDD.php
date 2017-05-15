<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 09/05/2017
 * Time: 11:44
 */

$dsn = 'mysql:dbname=appinfo;host=localhost';
$user = 'root';
$password = '';
try{
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connection réussi";
}
catch(PDOException $e){
    die('Erreur : ' . $e->getMessage());
}


