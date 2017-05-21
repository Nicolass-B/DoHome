<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 18/05/2017
 * Time: 02:48
 */

/*
 * étape 1 : faire lien vers page mdpoubli
 * étape 2 : demande le login, dans notre cas l'adresse mail
 * étape 3 : verif si il est dans notre BDD
 * étape 4 : si ok => envoi mail qui permet de change le mdp
 */

if(isset($_POST['envoi'])){
    if(!empty($_POST['recup_mail'])){
        $mail = htmlentities($_POST['recup_mail']);
        if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
            include ('../modele/oubliMdp.php');
            if(mailExist($dbh,$mail)){

            }
            else{
                $mailError="Cette adresse mail n'est pas enregistrée";

            }
        }
        else{
            $mailError= "Adresse mail invalide";
        }
    }
    else{
        $mailError="Veuillez entrer votre adresse mail";
    }
}
else{
    $mailError="Je suis la";
}
require_once ('../Vue/MdpOubli.php');