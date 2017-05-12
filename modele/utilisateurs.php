<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 05/05/2017
 * Time: 10:13
 */
require 'initConnexionBDD.php';

// fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
function takeMdp(PDO $dbh,$login){
    $reponse = $dbh->query('SELECT mot_de_passe FROM user WHERE Nom=\''.$login.'\'');
    return $reponse;
}

// fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
function takeUtilisateurs(PDO $dbh,$login){
    $reponse = $dbh->query('SELECT Mail FROM user WHERE Mail=\''.$login.'\'');
    return $reponse;
}

/*
$rep=takeUtilisateurs($dbh,'test@test.Com');

while ($donnees = $rep->fetch()) {
    //On affiche les données dans le tableau
    echo "</tr>";
    echo "<td> $donnees[Mail] </td>";

    echo "</tr>";
}
$rep->closeCursor();*/
