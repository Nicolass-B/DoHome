<?php

$titre = "capteur";


include '../Modele/initConnexionBDD.php';
include '../Modele/Capteur.php';

if (isset($_POST['capteur']))
{
    $idcapteur = 1; //$_POST['capteur'];
    $Capteur = new Capteur($idcapteur, $dbh);

    include('../Vue/capteur.php');

} else {
    // ici le capteur n'est pas précisé dans le formulaire
    // on renvoie a l'accueil.
    echo(' tu n\'as pas POST un capteur ');

    $idmaison = 1; //$_SESSION['idmaison']; to add quand on aura les sessions
    $query = "SELECT ID_pieces,Nom FROM pieces WHERE ID_Maison =:idmaison";
    $sql = $dbh->prepare($query);
    $sql->bindParam(':idmaison', $idmaison);
    $sql->execute();
    $data = $sql->fetchAll();
    $ligne = count($data);
    include('../Vue/capteur.php');


    if (isset($_POST['envoi'])) {
        if (isset($_POST['type'])) {
            if (isset($_POST['piece'])) {
                if (isset($_POST['nom_capteur'])) {


                }
            }
        }
        echo "<p>DAMN, tu viens d'ajouter un capteur dans la pièce !</p>";
    }
}