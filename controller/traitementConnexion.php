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

    $loginMail = htmlentities($_POST['loginMail']);
    $pass =htmlentities($_POST['pass']);

    if(!empty($loginMail) && !empty($pass)) { // L'utilisateur a rempli tous les champs du formulaire
        include ('../modele/utilisateurs.php');

        $repUtilisateur=takeUtilisateurs($dbh,$loginMail);
        if($repUtilisateur['nb_ocu']==0){//utilisateur non trouvé dans la base de donnée
            $messageErreur= 'Utilisateur non trouver';
            include ('../Vue/home.php');
        }
        else{// utilisateur trouvé
            $repMdp=takeMdp($dbh,$loginMail);
            if($_POST['pass']!=$repMdp['mot_de_passe']){//mot de passe non trouvé dans la base de donnée
                $messageErreur= 'Mauvais mot de passe';
                include ('../Vue/home.php');
            }
            else{//mdp OK
              include ('../Vue/Dashboard.php');
            }
        }
    }
    else{
        $messageErreur= 'Tous les champs ne sont pas rempli';
        include ('../Vue/home.php');
    }
}
else{
    $messageErreur= 'Formulaire non valider';
    include ('../Vue/home.php');
}



