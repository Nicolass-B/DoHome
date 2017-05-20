<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 20/05/2017
 * Time: 19:24
 */


include('initConnexionBDD.php');

function ajoutCapteur(PDO $bdd, $type, $idpiece)
{
    $query = $bdd->prepare('INSERT INTO capteurs(ID_Capteurs, Type, Valeur, Date_Installation, Etat_Batterie, ID_piece) VALUES (NULL, :type, NULL, :dateinstall, 100, :idpiece) ');
    $query->execute(array(
        'type' => $type,
        'idpiece' => $idpiece
    ));
}

function ajoutPiece(PDO $bdd, $nom, $idmaison)
{
    $query = $bdd->prepare('INSERT INTO pieces(ID_Maison, Nom) VALUES (:idmaison, :nom)');
    $query->execute(array(
        'idmaison' => $idmaison,
        'nom' => $nom
    ));
}