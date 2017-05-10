<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 05/05/2017
 * Time: 10:13
 */
include 'init.php';

// fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
function mdp($dbh,$identifiant){
    $reponse = $dbh->query('SELECT id, mdp FROM Utilisateurs WHERE identifiant='.$identifiant.'');
    return $reponse;
}

// fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
function utilisateurs($dbh){
    $reponse = $dbh->query('SELECT identifiant FROM Utilisateurs');
    return $reponse;
}

