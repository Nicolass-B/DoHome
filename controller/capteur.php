<?php
include '../modele/initConnexionBDD.php';

$res = $dbh->query('SELECT * FROM user');
$datas =$res->fetchAll(PDO::FETCH_OBJ);
var_dump($datas);