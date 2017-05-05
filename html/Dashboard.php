<!DOCTYPE html>
<html xmlns:justify xmlns:text-justify="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" href="../html/Dashboard_CSS.css"/>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body>
<header>
    <div class="container">
            <img class="logo" src="../img/fond_transparent2.png" alt="logo de l'entreprise">
        <div class="liste">
            <ul id="menu">
                <li>Dashboard</li>
                <li><bord>Mon profil</bord></li>
                <li><bord2>Ma maison</bord2></li>
                <li>Boutique</li>
            </ul>
        </div>
    </div>
</header>

<section>
    <div class="information">

        <div class="alarme">
            <p>Alarme</p>
            <img class="ON-OFF" src="../img/button-off-xxl.png" alt="ON-OFF">
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
</section>

</body>
</html>