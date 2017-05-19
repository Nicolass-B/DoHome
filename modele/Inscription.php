<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 17/05/2017
 * Time: 01:19
 */

require ('initConnexionBDD.php');

//Fonction qui insert un user dans la Base de donnée
function insertUser(PDO $bdd,$nom,$prenom,$mot_de_passe,$telephone,$email,$adresse){
    $query=$bdd->prepare('INSERT INTO user(Nom, Prenom, mot_de_passe,telephone, Mail,adresse,id) VALUES(:nom, :prenom, :mot_de_passe,:telephone, :email ,:adresse,:idUser)');
    $query->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'mot_de_passe' => $mot_de_passe,
        'telephone' => $telephone,
        'email' => $email,
        'adresse' => $adresse
    ));
}

//Fonction qui vérifie si le mot de passe et le mot de passe de confirmation son identique
function verif2MDP($pass,$passConfirme){
    if($pass==$passConfirme){
        return true;
    }
    else{
        return false;
    }

}

//Fonction qui vérifie si le mail entrez n'est pas déja dans la base de donnée
function verifMail(PDO $bdd,$mail){
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








/*
//Fonction qui vérifié si un champ est vide, si il est vide on affiche le message d'erreur que l'on veut
function verifChamp($champ,$messageErreur){
    if(!empty($champ)){

    }
    else{
        echo $messageErreur;
    }
}

function verifBdd(){

}*/