<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 05/05/2017
 * Time: 09:32
 */

$titre = "capteur";


include '../modele/initConnexionBDD.php';

$res = $dbh->query('SELECT * FROM user');
$datas =$res->fetchAll(PDO::FETCH_OBJ);
var_dump($datas);