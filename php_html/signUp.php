<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/skeleton.css"/>
    <title>Inscription</title>
</head>
<body>


<header>
    <div class="container1">
        <div>
            <img class="logo" src="../img/fond_transparent.png" alt="logo de l'entreprise"/>
        </div>


        <ul>
            <li><a href="[url fr]">FR</a></li>
            <li><a href="[url en]">EN</a></li>
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
            <input type="text" name="E-mail" id="E-mail" placeholder="Entrer vôtre adresse mail" required/>
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



            <input type="submit" value="Créer mon compte" />

           <p> <input type="radio" name="memo" id="memo"/>
            <label for="memo">J'ai lu et j'accepte les conditions d'utilisation</label>
           </p>
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