<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine Poussot
 * Date: 20/05/2017
 * Time: 20:45
 */

function getPiecesfromMaison(PDO $dbh, $idmaison)
{

    // ICI ON RETOURNE DANS $data LES PIECES DE L'UTILISATEUR POUR SA MAISON

    $query = "SELECT ID_pieces,Nom FROM pieces WHERE ID_Maison =:idmaison";
    $sql = $dbh->prepare($query);
    $sql->execute(['idmaison' => $idmaison]);
    $data = $sql->fetchAll();
    return $data;
}

function getCapteursfromPiece(PDO $dbh, $idpiece)
{
    // permet ded retourner tous les capteurs d'une pièce avec des trucs fu
    $query = "SELECT `capteurs`.`ID_Capteurs` AS `ID_Capteurs`, `pieces`.`Nom` AS `ID_pieces`, `capteurs`.`Type` AS `Type`, `capteurs`.`Valeur` AS `Valeur`, `capteurs`.`unite` AS `unite`, `capteurs`.`Etat_Batterie` AS `batt`
              FROM `pieces`
                    LEFT JOIN `capteurs` ON `capteurs`.`ID_piece` = `pieces`.`ID_pieces`
              ORDER BY `pieces`.`ID_pieces` ASC";
    $sql = $dbh->prepare($query);
    $sql->execute(['idpiece' => $idpiece]);
    $data = $sql->fetchAll();
    return $data;
}

