<?php

$titre = "capteur";


include '../Modele/initConnexionBDD.php';
include '../Modele/Capteur.php';

if (isset( $_POST['capteur']))
{
    $idcapteur = $_POST['capteur'];
    $Capteur = new Capteur($idcapteur, $dbh);
} else {
    echo (' tu n\'as pas posté un capteur');
}
