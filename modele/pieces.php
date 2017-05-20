<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine Poussot
 * Date: 20/05/2017
 * Time: 20:45
 */

function getPiecesfromMaison(PDO $dbh,$idmaison){

    // ICI ON RETOURNE DANS $data LES PIECES DE L'UTILISATEUR POUR SA MAISON

    $query = "SELECT ID_pieces,Nom FROM pieces WHERE ID_Maison =:idmaison";
    $sql = $dbh->prepare($query);
    $sql->execute(['idmaison' => $idmaison]);
    $data = $sql->fetchAll();
    return $data;
}

