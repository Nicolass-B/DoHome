<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../css/messagerie.css"/>
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
                        <li><a href="monProfil.php">Mon profil</a></li>
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
        <a class="LienImage" href="messagerie.php"><img class="mail" src="../Vue/img/icon_email.png" alt="logo de l'email"/></a>
        <a class="LienImage" href="home.php"><img class="deconexion" src="../Vue/img/icon_deconnexion.png" alt="logo de la deco"/></a>

    </section1>
</header>



<body>

</body>


<footer>
    <p>
        <span class="centre">Powered By DoHome Enterprise™</span>
        <span class="droite">Mentions Légales</span>
    </p>


</footer>
</html>