<?php
$titre = 'Mes Capteurs';
include('Haut-de-Page.php');
require_once('..\Modele\Capteur.php');
require_once('../controller/capteur.php');


?>
    <link rel="stylesheet" href="../css/tableau.css"

    <body>
    <div class="connexion-inscription">
        <form method="POST" action="../controller/capteur.php">
            <label>Ajouter un capteur</label>
            <select name="type" required>
                <option>Type</option>
                <option value="temp">Température</option>
                <option value="light">Illumination</option>
                <option value="presence">Présence</option>
                <option value="son">Son</option>
            </select>
            <select name="piece" required>
                <option value="">Pièce</option>
                <?php
                foreach ($pieces as $row) {
                    echo "<option value=" . $row['ID_pièces'] . ">" . $row['Nom'] . "</option>";
                }
                ?>
            </select>
            <input type="text" name="nom_capteur" placeholder="Nom du Capteur" required/>
            <input type="submit" name="envoi" value="Valider"/>


        </form>
    </div>

    <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover table-mc-light-blue">
            <thead>
            <tr>
                <th>ID</th>
                <th>Pièce</th>
                <th>Nom</th>
                <th>Valeur</th>
                <th>Unité</th>
                <th>Etat batterie</th>
            <tr>
            </thead>
            <tbody>
            <?php
            foreach ($capteur_piece as $row) {
                ?>
                <tr>
                    <td data-title="ID"><?php echo $row['ID_Capteurs'] ?></td>
                    <td data-title="Pièce"><?php echo $row['ID_pieces'] ?></td>
                    <td data-title="Nom"><?php echo $row['Type'] ?></td>
                    <td data-title="Valeur"><?php echo $row['Valeur'] ?></td>
                    <td data-title="Unité"><?php echo $row['unite'] ?></td>
                    <td data-title="Etat batterie"><?php echo $row['batt'] ?></td>

                </tr>

                <?php
            }
            ?>
            </tbody>
        </table>


    </div>


    </body>

<?php include 'BasDePage.php'; ?>