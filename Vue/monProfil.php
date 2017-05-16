<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../css/profil.css"/>
    <title> Mon profil </title>
</head>
<body>
<header>
    <section1>
        <div class="container">
            <img class="logo" src="../Vue/img/fond_transparent3.png" alt="logo de l'entreprise"/>
            <nav>
                <ul>
                    <div class="menu">
                        <li><a href="Dashboard.php">Dashboard</a></li>
                        <li class="enCours"><a href="monProfil.php">Mon profil</a></li>
                        <li><a href="Maison.php">Ma maison</a></li>
                        <li><a href="Boutique.php">Boutique</a></li>
                    </div>
                </ul>
            </nav>
        </div>
    </section1>
    <section1>
        <div class="recherche">
            <form action="/search" id="searchthis" method="get">
                <input id="search" name="q" type="text" placeholder="Rechercher"/>
                <input id="search-btn" type="submit" value="Rechercher"/>
            </form>
        </div>
    </section1>
    <section1>
        <img class="mail" src="img/icon_email.png" alt="logo de l'email"/>
        <a class="LienImage" href="home.php">
            <img class="deconexion" src="img/icon_deconnexion.png" alt="logo de la deco"/></>

    </section1>
</header>

<section>
    <div class="information">
    <ul>
        <div class="menusec">
            <li class="enCours"><a href="monProfil.php">Mon profil</a></li>
            <li><a href="compteSec.php">Mes comptes secondaires</a></li>
        </div>
    </ul>
    </div>
    <p>
    <div class="formulaire">
        <div class="information">
        <ul>
            Nom
            <li><input type="text" name="pseudo" value="Nom" disabled="disabled"/></li>
            Prénom
            <li><input type="text" name="pseudo" value="Prénom" disabled="disabled"/></li>
            E-mail
            <li><input type="text" name="pseudo" value="Adresse mail"/></li>
            Mot de passe
            <li><input type="text" name="pseudo" value="********" disabled="disabled"/></li>
            Adresse
            <li><input type="text" name="pseudo" value="Adresse"/></li>
            Date de naissance
            <li><input type="date" value="JJ/MM/AAAA"/></li>
            Numéro de téléphone
            <li><input type="text" name="pseudo" value="Numéro"/></li>


        </ul>
        </div>
    </div>

    </p>

</section>
</body>
<footer>
    <p>
        <span class="centre">Powered By DoHome Enterprise™</span>
        <span class="droite">Mentions Légales</span>
    </p>


</footer>
</html>