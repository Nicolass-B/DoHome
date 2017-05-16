
<?php

session_start();
require_once("Modele/init.php");


if (isset($_GET['home']))
{
    if ($_GET['home'] == "form")
    {
        include("controller/traitementInscription.php");
    }
    else if ($_GET['inscription'] == "verif")
    {
        include("controller/traitementInscription.php");
    }
}
else if (!isset($_SESSION["id_client"]))
{
    //require("Vue/login.php");
    ?><link rel="stylesheet" href="Styles/login.css" /><?php
    include("Controleur/login.php");
}
else
{
    if(isset($_GET['cible']))
    { // on regarde la page où il veut aller
        if($_GET['cible'] == 'accueil' || $_GET['cible'] == 'verif')
        {    //include("Vue/accueil.php");
            ?>
            <script type="text/javascript">
                setTimeout("document.location='accueil.php'; " , 20);
            </script>
            <?php
        }
        else if ($_GET['cible'] == "deconnexion")
        {
            // Détruit toutes les variables de session
            $_SESSION = array();
            if (isset($_COOKIE[session_name()]))
            {
                setcookie(session_name(), '', time()-42000, '/');
            }
            session_destroy();
            ?><link rel="stylesheet" href="Styles/login.css" /><?php
            include ("Controleur/login.php");
        }
        else if ($_GET['cible'] == "gen")
        {
            include('genValeurs.php');
        }
    }
    else if ($_SESSION["admin"])
    {
        ?><script type="text/javascript">
        setTimeout("document.location='clients.php'; " , 20);
    </script>
        <?php
    }
    else
    {
        ?><script type="text/javascript">
        setTimeout("document.location='accueil.php'; " , 20);
    </script>
        <?php
    }

}
?>