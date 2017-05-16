<!DOCTYPE html>
<html xmlns:justify xmlns:text-justify="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../css/profil.css"/>
    <title> Mon profil </title>
</head>

<header>
<D>
    <section>
        <div class="container">
            <img class="logo" src="../Vue/img/fond_transparent3.png" alt="logo de l'entreprise">
            <nav>
                <ul class="menu">
                    <li ><a href="../Vue/Dashboard.php">Dashboard</a></li>
                    <li class="enCours"><a href="../Vue/monProfil.php">Mon profil</a></li>
                    <li><a href="../Vue/Maison.php">Ma maison</a></li>
                    <li><a href="../Vue/Boutique.php">Boutique</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <section1>
        <div class="recherche">
            <form action="/search" id="searchthis" method="get">
                <input id="search" name="q" type="text" placeholder="Rechercher"/>
                <input id="search-btn" type="submit" value="Rechercher"/>
            </form>
        </div>
    </section1>
    <section1>
        <img class="mail" src="../Vue/img/icon_email.png" alt="logo de l'email"/>
        <img class="deconexion" src="../Vue/img/icon_deconnexion.png" alt="logo de la deco"/>

    </section1>

</D>
</header>

<body>
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