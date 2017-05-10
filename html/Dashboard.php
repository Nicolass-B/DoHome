<!DOCTYPE html>
<html xmlns:justify xmlns:text-justify="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" href="../html/Dashboard_CSS.css"/>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body>

<header>
    <D>
        <section>
            <div class="container">
                <img class="logo" src="../img/fond_transparent3.png" alt="logo de l'entreprise">
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
                <form action="/search" id="searchthis" method="get">
                    <input id="search" name="q" type="text" placeholder="Rechercher" />
                    <input id="search-btn" type="submit" value="Rechercher" />
                </form>
            </div>
        </section>

    </D>
</header>

<section>
    <HD>
        <section1>
            <div class="information">
                <div class="alarme">
                    <p>Alarme</p>
                    <label class="switch">
                        <input type="checkbox">
                        <div class="slider round"></div>
                    </label>
                </div>
                <div class="mode">
                    <p>Mode</p>
                    <form method="post" action="mode.php">
                        <select name="mode" id="mode">
                            <option value="nuit">Nuit</option>
                            <option value="jour">Jour</option>
                            <option value="vacances">Vacances</option>
                        </select>
                    </form>
                </div>
                <div class="température">
                    <p>Température</p>
                    <form method="post" action="mode.php">
                        <select name="température" id="température">
                            <option value="15">15°C</option>
                            <option value="16">16°C</option>
                            <option value="17">17°C</option>
                            <option value="18">18°C</option>
                            <option value="19">19°C</option>
                            <option value="20">20°C</option>
                            <option value="21">21°C</option>
                            <option value="22">22°C</option>
                            <option value="23">23°C</option>
                            <option value="24">24°C</option>
                            <option value="25">25°C</option>
                        </select>
                    </form>
                </div>
            </div>
        </section1>

        <section2>
            <div class="information">
                <div class="volets">
                    <p>Volets</p>
                    <script type="text/javascript">
                        function Ouverture(){
                            currentvalue = document.getElementById('Ouverture').value;
                            if(currentvalue == "Ouvrir"){
                                document.getElementById("Ouverture").value="Fermer";
                            }
                            else{
                                document.getElementById("Ouverture").value="Ouvrir";
                            }
                        }
                    </script>
                    <input type="button" value="Ouvrir" id="Ouverture" onclick="Ouverture();">

                </div>

                <div class="lumiere">
                    <p>Lumières</p>
                    <script type="text/javascript">
                        function Allumage(){
                            currentvalue = document.getElementById('Allumage').value;
                            if(currentvalue == "Allumer"){
                                document.getElementById("Allumage").value="Eteindre";
                            }
                            else{
                                document.getElementById("Allumage").value="Allumer";
                            }
                        }
                    </script>
                    <input type="button" value="Allumer" id="Allumage" onclick="Allumage();">
                </div>
            </div>

        </section2>

        <section3>
                <div class="meteo">
                    <div id="cont_NzUwNTZ8NHwyfDR8MnxGRkZGRkZ8MXw2NjY2NjZ8Y3wx">
                        <div id="spa_NzUwNTZ8NHwyfDR8MnxGRkZGRkZ8MXw2NjY2NjZ8Y3wx">
                            <a id="a_NzUwNTZ8NHwyfDR8MnxGRkZGRkZ8MXw2NjY2NjZ8Y3wx" href="http://www.meteocity.com/france/paris_v75056/" target="_blank" style="color:#333;text-decoration:none;">
                                Météo Paris</a> ©
                            <a href="http://www.meteocity.com">meteocity.com</a>
                        </div>
                        <script type="text/javascript" src="http://widget.meteocity.com/js/NzUwNTZ8NHwyfDR8MnxGRkZGRkZ8MXw2NjY2NjZ8Y3wx">
                        </script>
                    </div>
                </div>
        </section3>

        <section4>
            <div class="information">
                <div class="video">
                    <p>Vidéosurveillance</p>
                    <video src="../img/Zombieland copie.mp4" controls poster="../img/fond-decran-page2.jpg" width="200">
                    </video>
                    <p>Salon</p>
                    <video src="../img/Zombieland copie.mp4" controls poster="../img/fond-decran-page2.jpg" width="200">
                    </video>
                    <p>Chambre parents</p>
                </div>
            </div>
        </section4>
    </HD>

    <BD>
        <section5>
            <div class="information">
                <div class="date">
                    <?php
                    $date = date("D-d-M-Y");
                    $heure = date("H:i");
                    Print("$heure"); echo '<br>';
                    Print("$date");
                    ?>
                </div>
            </div>
        </section5>
    </BD>

</section>

</body>

<footer>
    <div class="Powered">Powered By DoHome Enterprise™</div>
    <div class="Mentions">Mentions Légales</div>
</footer>

</html>