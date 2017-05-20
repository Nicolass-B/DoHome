<?php

$titre = "capteur";


require_once '../Modele/initConnexionBDD.php';
require_once '../Modele/Capteur.php';

if (true OR isset( $_GET['capteur']))
{
    $idcapteur = 1; //$_GET['capteur'];
    $Capteur = new Capteur($idcapteur, $dbh);
    include '../Vue/capteur.php';

} else {
    // ici le capteur n'est pas précisé dans le formulaire
    // on renvoie a l'accueil.
    echo (' tu n\'as pas POST un capteur');
    header('Location : ../Vue/accueil.php');
}