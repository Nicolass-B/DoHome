<!DOCTYPE html>
<html xmlns:justify xmlns:text-justify="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" href="../css/Haut-de-Page.css"/>
    <meta charset="UTF-8">
    <title><?php echo $titre ?> </title>
</head>

<body>

<header>
    <D>
        <section>
            <div class="container">
                <img class="logo" src="../Vue/img/fond_transparent.png" alt="logo de l'entreprise">
                <nav>
                    <ul class="menu">
                        <li>Dashboard</li>
                        <li>Mon profil</li>
                        <li>Ma maison</li>
                        <li>Boutique</li>
                    </ul>
                </nav>
            </div>
        </section>

        <section>
            <div class="recherche">
                <form action="search" id="searchthis" method="get">
                    <input id="search" name="q" type="text" placeholder="Rechercher"/>
                    <input id="search-btn" type="submit" value="Rechercher"/>
                </form>
            </div>
        </section>

    </D>
</header>

</body>

<footer class="footer">
    <div>
        <div class="Powered">Powered By DoHome Enterprise™</div>
        <div class="Mentions">Mentions Légales</div>
    </div>
</footer>

</html>