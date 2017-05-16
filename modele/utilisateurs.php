<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 05/05/2017
 * Time: 10:13
 */
require 'initConnexionBDD.php';

// vérif mdp dans BDD
function takeMdp(PDO $dbh,$login){
    $reponse = $dbh->query('SELECT mot_de_passe FROM user  WHERE Mail=\''.$login.'\'');
    $affiche= $reponse->fetch();
    return $affiche;
}

// vérif user
function takeUtilisateurs(PDO $dbh,$login){
    $reponse = $dbh->query('SELECT COUNT(mail) as nb_ocu FROM user WHERE Mail=\''.$login.'\'');
    $affiche= $reponse->fetch();
    return $affiche;
}










/*
$rep=takeMdp($dbh,'test@test.Com');
var_dump($rep);

function connectUser(PDO $db, $email, $mot_de_passe)
{
    ####
// Vérification des identifiants
    $email = htmlspecialchars($email);
    $mot_de_passe = htmlspecialchars($mot_de_passe);
    $req = $db-> prepare('SELECT Mail,mot_de_passe FROM user WHERE Mail = :email AND mot_de_passe = :mot_de_passe');
    $req-> execute(array(
        'email' => $email,
        'mot_de_passe' => md5($mot_de_passe)));

    $resultat = $req-> fetch();

    return ($resultat);
}

function createUser(PDO $bdd, $utilisateur)
{
    $query=$bdd->prepare('INSERT INTO client(nom, prenom, mot_de_passe, email) VALUES(:nom, :prenom, :mot_de_passe, :email)');
    $query->execute(array(
        'nom' => htmlspecialchars($utilisateur['nom']),
        'prenom' => htmlspecialchars($utilisateur['prenom']),
        'mot_de_passe' => htmlspecialchars(md5($utilisateur['mot_de_passe'])),
        'email' => htmlspecialchars($utilisateur['email'])
    ));
    $id_client = $bdd->lastInsertId();
    $query->CloseCursor();

    return ($id_client);

}*/