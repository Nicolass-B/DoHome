<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 12/05/2017
 * Time: 02:34
 */
/* la fonction isset() permet de vérifier si une variable est définie
la fonction empty Détermine si une variable est considérée comme vide.
Une variable est considérée comme vide si elle n'existe pas, ou si sa valeur équivaut à FALSE
 */

if(isset($_POST['envoi'])) { // L'utilisateur vient de valider le formulaire de connexion
    if(!empty($_POST['loginMail']) && !empty($_POST['pass'])) { // L'utilisateur a rempli tous les champs du formulaire
        include ('../modele/utilisateurs.php');

        $repUtilisateur=takeUtilisateurs($dbh,$_POST['loginMail']);
        if($repUtilisateur['nb_ocu']==0){//utilisateur non trouvé dans la base de donnée
            $messageErreur= 'utilisateur non trouvé';
            include ('../Vue/home.php');
        }
        else{// utilisateur trouvé
            $repMdp=takeMdp($dbh,$_POST['loginMail']);
            if($_POST['pass']!=$repMdp['mot_de_passe']){//mot de passe non trouvé dans la base de donnée
                $messageErreur= 'mauvais mot de passe';
                include ('../Vue/home.php');
            }
            else{//mdp OK
              include ('../Vue/Dashboard.php');
            }
        }
    }
    else{
        $messageErreur= 'tout les champs ne sont pas rempli';
        include ('../Vue/home.php');
    }
}
else{
    $messageErreur= 'formulaire pas valider';
    include ('../Vue/home.php');
}



