<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Maison</title>
    <link rel="stylesheet" href="../css/Maison.css"/>
</head>
<body>
<header>
    <D>
        <section>
            <div class="container">
                <img class="logo" src="../Vue/img/fond_transparent3.png" alt="logo de l'entreprise">
                <nav>
                    <ul class="menu">
                        <li><a href="../Vue/Dashboard.php">Dashboard</a></li>
                        <li><a href="../Vue/monProfil.php">Mon profil</a></li>
                        <li class="enCours"><a href="../Vue/Maison.php">Ma maison</a></li>
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
            <a class="LienImage" href="messagerie.php"><img class="mail" src="../Vue/img/icon_email.png" alt="logo de l'email"/></a>
            <a class="LienImage" href="home.php"><img class="deconexion" src="../Vue/img/icon_deconnexion.png" alt="logo de la deco"/></>

        </section1>

    </D>
</header>


<x>
<section>
    <div class="salon">
        <p>SALON</p>
     </div>
    <div class="cuisine">
        <p>CUISINE</p>
    </div>
</section>

<section2>
    <div class="chambre1">
<p>CHAMBRE 1</p>
    </div>



    <div class="chambre2">
        <p>CHAMBRE 2</p>

    </div>
</section2>

<section3>
    <div class="salle_de_bain">
        <p>SALLE DE BAIN</p>

    </div>
    <div class="salle_a_manger">
         <p>SALLE A MANGER</p>
    </div>
</section3>

    <section4>

        <img class="logo2" src="../Vue/img/plus4.png" alt="plus">
<div class="ajout"> Ajoutez une pièce </div>
        <img class="logo3" src="../Vue/img/less1.png" alt="plus">

    </section4>
</x>
</body>



<footer>
    <p>
        <span class="centre">Powered By DoHome Enterprise™</span>
        <span class="droite">Mentions Légales</span>
    </p>
</footer>
</html>