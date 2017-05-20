<?php

$titre = "capteur";


require_once '../Modele/initConnexionBDD.php';
require_once '../Modele/capteur.php';
require_once '../Modele/ajouts.php';
require_once '../Modele/pieces.php';

if (isset($_POST['capteur']))
{
    $idcapteur = 1; //$_POST['capteur'];
    $Capteur = new Capteur($idcapteur, $dbh);

    include('../Vue/capteur.php');

} else {
    // ici le capteur n'est pas précisé dans le formulaire
    // on renvoie a l'accueil.
    $idmaison = 1; //$_SESSION['idmaison']; to add quand on aura les sessions
    getPiecesfromMaison($dbh, $idmaison);

    include('../Vue/capteur.php');



    if (isset($_POST['envoi'])) {
        if (isset($_POST['type'])) {
            if (isset($_POST['piece'])) {
                if (isset($_POST['nom_capteur'])) {
                    ajoutCapteur($dbh, $_POST['type'], $_POST['piece']);
                    ?>
                    <script>alert("<?php echo htmlspecialchars('Un capteur vient d\'être ajouté', ENT_QUOTES); ?>")</script>
                    <?php

                }
            }
        }
        echo "<p>DAMN, tu viens d'ajouter un capteur dans la pièce !</p>";
    } else{
        echo 'pas de POST';
    }
}
