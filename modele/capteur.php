<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 05/05/2017
 * Time: 10:12
 */
require_once ("init.php");

// fonction qui cherche les capteurs pour une pièce donnée
function get_capteurs_piece(PDO $db,$IDpiece){

    $req = $db->prepare('SELECT ID_Capteurs FROM capteurs WHERE ID4=:idpiece');
    $req->execute(array(
        'idpiece' => $IDpiece,
    ));
    $resultat = $req->fetch();

    return $resultat;
}

function get_piece_maison(PDO $db,$IDpiece){

    $req = $db->prepare('SELECT ID_Capteurs FROM capteurs WHERE ID4=:idpiece');
    $req->execute(array(
        'idpiece' => $IDpiece,
    ));
    $resultat = $req->fetch();

    return $resultat;
}

// fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données

function utilisateurs(PDO $db){
    $reponse = $db->query("SELECT Mail FROM user");
    return $reponse;
}

try{
    //$db = new PDO("mysql:host=$host;dbname=$dbname", "$user");
    $db->query("SET NAMES UTF8");
    echo "connexion réussie";
}
catch (PDOException $e){
    die('erreur : '. $e->getMessage());
}
