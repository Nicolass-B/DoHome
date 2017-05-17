<?php

$titre = "capteur";


include '../Modele/initConnexionBDD.php';
include '../Modele/Capteur.php';

if (isset( $_POST['capteur']))
{
    $idcapteur = $_POST['capteur'];
    $Capteur = new Capteur($idcapteur, $dbh);


} else {
    // ici le capteur n'est pas précisé dans le formulaire
    // on renvoie a l'accueil.
    echo (' tu n\'as pas posté un capteur');
    header('Location : ../Vue/accueil.php');
}