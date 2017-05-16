<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 09/05/2017
 * Time: 10:01
 */







/*    $titre="inscription";
    require_once("views/signUp.php");

    if (isset($_POST['email']))
    {

        $fail=NULL;
        if (!isEmail($_POST['email']))
        {
            $fail = 'Email incorrect';
        }
        else if (emailExistant($bdd, $_POST['email']))
        {
            $fail='Email déjà utilisé';
        }
        else if (!isMotDePasse($_POST['mot_de_passe']))
        {
            $fail='7 caractères demandés dont un spécial pour le mot de passe';
        }
        else if ($_POST['mot_de_passe'] != $_POST['mot_de_passe_bis'])
        {
            $fail='Mots de passe différents';
        }
        else if (isAdmin($bdd, $_POST['numero_identification']))
        {
            $fail="isAdmin";
        }
        else if (appareilStatut($bdd, $_POST['numero_identification']) == 1)
        {
            $fail="L'appareil est déjà utilisé";
        }
        else if (appareilStatut($bdd, $_POST['numero_identification']) == 2)
        {
            $fail="L'appareil n'existe pas";
        }


        if ($fail=="isAdmin")
        {

            $_SESSION['id_client'] = createUserFirstConnexion($bdd, $_POST, 1);
            $_SESSION['admin'] = 1;
            ?>

            <script type="text/javascript">
                setTimeout("document.location='index.php'; " , 20);
            </script>

            <?php
        }
        else if (!isset($fail))
        {

            $_SESSION['id_client'] = createUserFirstConnexion($bdd, $_POST);
            $_SESSION['admin'] = 0;
            $infoDomicile['numero'] = NULL;
            $infoDomicile['rue'] = NULL;
            $infoDomicile['departement'] = NULL;
            $infoDomicile['ville'] = NULL;
            $infoDomicile['pays'] = NULL;

            $numero_identification = $_POST['numero_identification'];

            $infoSalle['nom'] = 'Nouvelle salle';
            $infoSalle['nombre_fenetre'] = 1;
            $infoSalle['taille']=1;

            appairerAppareil($bdd, ajoutSalle($bdd, ajoutDomicile($bdd, $_SESSION['id_client'], $infoDomicile), $infoSalle), $numero_identification);
            ?>
            <script type="text/javascript">
                setTimeout("document.location='index.php'; " , 20);
            </script>
            <?php

        }
        else
            echo (inscriptionForm($fail));

    }
    else
        echo (inscriptionForm());
