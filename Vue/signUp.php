<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/commun.css"/>
    <title>Inscription</title>
</head>
<body>


<header>
    <div class="container1">
        <div>
            <img class="logo" src="../img/fond_transparent.png" alt="logo de l'entreprise"/>
        </div>


        <ul>
            <li><a href="">FR</a></li>
            <li><a href="">EN</a></li>
        </ul>

       <!-- <input type="checkbox" name="french" id="french" placeholder="FR"/>!

        <input type="checkbox" name="english" id="english" placeholder="EN"/>-->

        <div class="nomEntreprise">
            DoHome <span>enterprise ™</span>
        </div>
    </div>

</header>


<section>
    <div class="container2"
         <h2>
             Inscription
         </h2>
        <form method="post" action="inscription.php">

            <p>
                <label for="nom">Nom </br></label>
                <input type="text" name="nom" id="nom" placeholder="Entrer vôtre nom"  required/>
            </p>

            <label for="prenom">Prénom </br></label>
            <input type="text" name="prenom" id="prenom" placeholder="Entrer vôtre prénom" required/>
            </br>
            <label for="E-mail">E-mail </br></label>
            <input type="email" name="E-mail" id="E-mail" placeholder="Entrer vôtre adresse mail" required/>
            </br>
            <label for="pass">Mot de passe </br></label>
            <input type="text" name="pass" id="pass" placeholder="Entrer vôtre mot de passe" required/>
            </br>
            <label for="confirmePasse">Confirmation du mot de passe </br></label>
            <input type="text" name="confirmePasse" id="confirmePasse" placeholder="Confirmer vôtre mot de passe" required/>
            </br>
            <label for="adresse">Adresse </br></label>
            <input type="text" name="adresse" id="adresse" placeholder="adresse/code postal/ville" required/>
            </br>

            <p>
                <label for="sexe">Sexe</label><br />
                <select name="sexe" id="sexe"  >
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select>
            </p>

            <p>

                <label for="date">Date de naissance</label><br />
                <select name="jour" id="jour"  >
                    <option value="jour1">01</option><option value="jour2">02</option><option value="jour2">02</option>
                    <option value="jour2">03</option><option value="jour2">04</option><option value="jour2">05</option>
                    <option value="jour2">06</option><option value="jour2">07</option><option value="jour2">08</option>
                    <option value="jour2">09</option><option value="jour2">10</option><option value="jour2">11</option>
                    <option value="jour2">12</option><option value="jour2">13</option><option value="jour2">14</option>
                    <option value="jour2">02</option><option value="jour2">02</option><option value="jour2">02</option>
                    <option value="jour2">02</option><option value="jour2">02</option><option value="jour2">02</option>
                    <option value="jour2">02</option><option value="jour2">02</option><option value="jour2">02</option>
                    <option value="jour2">02</option><option value="jour2">02</option><option value="jour2">02</option>
                    <option value="jour2">02</option><option value="jour2">02</option><option value="jour2">02</option>
                    <option value="jour2">02</option><option value="jour2">02</option><option value="jour2">02</option>
                </select>
                <select name="mois" id="mois"  >
                    <option value="janvier">Janvier</option><option value="fevrier">février</option>
                    <option value="mars">Mars</option><option value="avril">Avril</option>
                    <option value="mai">Mai</option><option value="juin">Juin</option>
                    <option value="juillet">Juillet</option><option value="aout">Aout</option>
                    <option value="septembre">Septembre</option><option value="octobre">Octobre</option>
                    <option value="novembre">Novembre</option><option value="decembre">Décembre</option>
                </select>
                <select name="année" id="année"  >
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select>

            </p>

            <p>
                <label for="tel">Numéro de téléphone </br></label>
                <input type="tel" name="tel" id="tel" placeholder="Entrer vôtre numéro de téléphone" required/>
            </p>


           <p> <input type="radio" name="memo" id="memo"/>
            <label for="memo">J'ai lu et j'accepte les conditions d'utilisation</label>
           </p>

            <input type="submit" value="Créer mon compte" />
        </form>
</section>


<footer>
    <div class="container3">
        <div class="powered">Powered By DoHome Enterprise™ + ♥ from Paris</div>
        <div class="legalMention">Mentions Légales</div>
    </div>
</footer>

</body>
</html>