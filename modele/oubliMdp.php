<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 21/05/2017
 * Time: 03:21
 */
require ('initConnexionBDD.php');

function mailExist(PDO $bdd,$mail){
    $reponse = $bdd->prepare('SELECT COUNT(mail) as nb_ocu FROM user WHERE Mail=\''.$mail.'\'');
    $reponse->execute();
    $affiche =$reponse->fetch();
    if($affiche['nb_ocu']==1){
        return true;
    }
    else{
        return false;
    }
}