<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styleSignUp.css"/>
    <title>Inscription</title>
</head>
<body>


<header>
    <div class="container">
            <img class="logo" src="../Vue/img/fond_transparent3.png" alt="logo de l'entreprise"/>
        <nav>
            <ul class="menu">
                <li><a href="">FR</a></li>
                <li><a href="">EN</a></li>
            </ul>
        </nav>
    </div>
</header>


<section>
    <div class="information">
        <form method="post" action="../controller/traitementInscription.php">
            <fieldset>
                <legend>Inscription</legend>
                <div class="test">
                    <div class="test1">
                        <p>
                        <label for="nom">Nom </br></label>
                        <input type="text" name="nom" id="nom" placeholder="Entrez votre nom"  required/>
                        </p>

                        <label for="prenom">Prénom </br></label>
                        <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" required/>
                        </br></br>
                        <label for="E-mail">E-mail </br></label>
                        <input type="email" name="E-mail" id="E-mail" placeholder="Entrez votre adresse mail" required/>
                        </br></br>
                        <label for="pass">Mot de passe </br></label>
                        <input type="text" name="pass" id="pass" placeholder="Entrez votre mot de passe" required/>
                        </br></br>
                        <label for="confirmePasse">Confirmation du mot de passe </br></label>
                        <input type="text" name="confirmePasse" id="confirmePasse" placeholder="Confirmation mot de passe" required/>
                        </br></br>
                        <label for="adresse">Adresse </br></label>
                        <input type="text" name="adresse" id="adresse" placeholder="Adresse/Code postal/Ville" required/>
                        </br></br>

                    </div>

                    <div class="test2">
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
                                <option value="jour3">03</option><option value="jour2">04</option><option value="jour2">05</option>
                                <option value="jour2">06</option><option value="jour2">07</option><option value="jour2">08</option>
                                <option value="jour2">09</option><option value="jour2">10</option><option value="jour2">11</option>
                                <option value="jour2">12</option><option value="jour2">13</option><option value="jour2">14</option>
                                <option value="jour2">15</option><option value="jour2">16</option><option value="jour2">17</option>
                                <option value="jour2">18</option><option value="jour2">19</option><option value="jour2">20</option>
                                <option value="jour2">21</option><option value="jour2">22</option><option value="jour2">23</option>
                                <option value="jour2">24</option><option value="jour2">25</option><option value="jour2">26</option>
                                <option value="jour2">27</option><option value="jour2">28</option><option value="jour2">29</option>
                                <option value="jour2">30</option>
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
                                <option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option>
                                <option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option>
                                <option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option>
                                <option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option>
                            </select>

                        </p>

                        <p>
                            <label for="tel">Numéro de téléphone </br></label>
                            <input type="tel" name="tel" id="tel" placeholder="Entrez votre numéro de téléphone" required/>
                        </p>
                        </br>

                         <p> <input type="radio" name="memo" id="memo"/>
                            <label for="memo">J'ai lu et j'accepte les conditions d'utilisation</label>
                         </p>

                        <input class="bouton1" type="submit" name="envoi" value="Créer mon compte" />
                    </div>
                </div>
            </fieldset>
        </form>

    </div>
</section>


<footer>
    <p>
        <span class="centre">Powered By DoHome Enterprise™</span>
        <span class="droite">Mentions Légales</span>
    </p>
</footer>

</body>
</html>