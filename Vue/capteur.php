<?php
$titre = 'Mes Capteurs';
//include('Haut-de-Page.php');
require_once('..\Modele\Capteur.php');
require_once('../controller/capteur.php');


?>

<body>
<div class="connexion-inscription">
    <form method="POST" action="../controller/capteur.php">

        <select name="type" required>
            <option value="temp">Température</option>
            <option value="light">Illumination</option>
            <option value="presence">Présence</option>
            <option value="son">Son</option>
        </select>
        <select name="piece" required>
            <?php
            foreach ($data as $row) {
                echo "<option value=" . $row['ID_pièces'] . ">" . $row['Nom'] . "</option>";
            }
            ?>
        </select>
        <input type="text" name="nom_capteur" placeholder="Nom du Capteur" required/>
        <input type="submit" name="envoi" value="Valider"/>


    </form>
</div>

<div>
    <table>
        <tbody>
        <?php
        // $NbrCol : le nombre de colonnes
        // $NbrLigne : le nombre de lignes
        // -------------------------------
        // pour chaque ligne
        for ($i = 1; $i <= $ligne; $i++) {
            ?>
            <tr>
                <?php // pour chaque colonne (de la ligne)
                for ($j = 1; $j <= 6; $j++) {
                    ?>
                    <td>
                        <?php // -------------------------
                        // DONNEES A AFFICHER dans la cellule
                        echo 'ligne ' . $i . ', colonne ' . $j; // CONTENU de la CELLULE (exemple)
                        // -------------------------
                        ?>        </td>
                <?php } // end for
                ?>
            </tr>
            <?php
        } // end for
        ?>
        </tbody>
    </table>


</div>


</body>