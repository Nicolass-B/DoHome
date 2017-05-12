<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 05/05/2017
 * Time: 09:32
 */
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if(isset($_POST['envoi'])) { // L'utilisateur vient de valider le formulaire de connexion
        if(!empty($_POST['loginMail']) && !empty($_POST['pass'])){ // L'utilisateur a rempli tous les champs du formulaire
            include("../Modele/utilisateurs.php");

            $loginSaisi =$_POST['loginMail'];
            $PassSaisi =$_POST['pass'];
            $reponse = takeMdp($dbh,$loginSaisi);

            if($reponse2->rowcount()==0){  // L'utilisateur n'a pas été trouvé dans la base de données
                $erreur = "Utilisateur inconnu";
                echo "utilisateur pas trouvé";
                include("Vue/connexion_erreur.php");
            }
            else { // utilisateur trouvé dans la base de données
                $ligne = $reponse->fetch();
                if(md5($_POST['pass'])!=$ligne['pass']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données
                    $erreur = "Mot de passe incorrect";
                    include("Vue/connexion_erreur.php");
                }
                else { // mot de passe correct, on affiche la page d'accueil
                    $_SESSION["userID"] = $ligne['id'];
                    include("../Vue/home.php");
                }
            }
        }
        else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            echo "tout les champ ne sont pas rempli";
            $erreur = "Veuillez remplir tous les champs";
            include("Vue/connexion_erreur.php");
        }
    }
    else { // La page de connexion par défaut
        echo " sa marche pas";
        include("Vue/non_connecte.php");
    }