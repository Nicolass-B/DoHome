<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 17/05/2017
 * Time: 01:19
 */

//Fonction qui insert un user dans la Base de donnée
function insertUser(PDO $bdd,$nom,$prenom,$mot_de_passe,$telephone,$email,$adresse){
    $query=$bdd->prepare('INSERT INTO user(Nom, Prenom, mot_de_passe,telephone, Mail,adresse) VALUES(:nom, :prenom, :mot_de_passe,:telephone, :email ,:adresse)');
    $query->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'mot_de_passe' => $mot_de_passe,
        'telephone' => $telephone,
        'email' => $email,
        'adresse' => $adresse
    ));
}