<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 05/05/2017
 * Time: 10:12
 */

include 'init.php';

// fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
function get_capteurs_piece($db,$IDpiece){
    $reponse = $db->query('SELECT ID_Capteurs FROM capteurs WHERE ID4="'.$IDpiece.'"');
    return $reponse;
}

function get_piece_maison($db,$IDpiece){
    $reponse = $db->query('SELECT ID FROM capteurs WHERE ID4="'.$IDpiece.'"');
    return $reponse;
}

// fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
function utilisateurs($db){
    $reponse = $db->query('SELECT Adresse FROM user');
    return $reponse;
}


?>