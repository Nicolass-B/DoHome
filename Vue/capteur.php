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
            <option value="">Pièce</option>
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
        <thead>
            <td>ID</td>
            <td>Nom</td>
            <td>Valeur</td>
            <td>Unité</td>
            <td>Etat batterie</td>
        </thead>
        <tbody>
        <?php
        foreach($data as $row) {
            ?>
            <tr>
                <td><?php echo $row['Id']?></td>
                <td><?php echo $row['Name']?></td>
            </tr>

            <?php
        }
        ?>
        </tbody>
    </table>


</div>


</body>