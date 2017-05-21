<?php

$titre = "capteur";


require_once '../Modele/initConnexionBDD.php';
require_once '../Modele/pieces.php';
require_once '../Modele/ajouts.php';
require_once '../Modele/maison.php';

$idmaison = 1; //$_POST['maison'];
$piece = getPiecesfromMaison($dbh, $idmaison);


if (isset($_POST['maison'])) {

    include('../Vue/Maison.php');

} else {
    // ici la piece n'est pas précisé dans le formulaire
    // on renvoie a l'accueil des pieces
    include('../Vue/Maison.php');


    if (isset($_POST['envoi'])) {
        if (isset($_POST['maison'])) {
            if (isset($_POST['nom_piece'])) {
                ajoutPiece($dbh, $_POST['type'], $_POST['piece']);
                ?>
                <script>alert("<?php echo htmlspecialchars('la pièce a bien été ajoutée', ENT_QUOTES); ?>")</script>
                <?php

            }
        }
    } else {
        echo "<p>DAMN, tu viens d'ajouter un capteur dans la pièce !</p>";
    }
}