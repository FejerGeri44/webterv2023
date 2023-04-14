<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Módosítás</title>
    <link rel="stylesheet" href="../public/CSSfajlok/altalanos.css">
    <link rel="icon" href="../public/favicon.webp">
</head>
<body class="hatter">
<div class="navbar">
    <ul>
        <li><a href="Quiz.php">Quiz</a></li>
        <li><a href="Filmertekelo.php">Filmek</a></li>
        <li><a class="active" href="Modositas.php">Chat</a></li>
    </ul>
</div>
<div class="container"><br>
    <p class="title">Adatmódosítás</p>
</div>
<hr><hr>

<div class="ablak">
    <div class="title">Adatmódosítás</div>
    <form action="usermodositas.php" method="post">
        <div class="adatok">

            <div class="input">
                <label><span class="adat">Email cím</span></label>
                <label for="email"></label><input type="email" id="email" name="email" placeholder="A regisztrált email címed" required>
                <label><span class="adat">(Megadása kötelező)</span></label>
            </div>

            <div class="input">
                <label><span class="adat">Név</span></label>
                <label for="name"></label><input type="text" id="name" name="name" placeholder="Új Név">
            </div>

            <div class="input">
                <label><span class="adat">Felhasználónév</span></label>
                <label for="username"></label><input type="text" id="username" name="username" placeholder="Új felhasználónév">
            </div>

            <div class="input">
                <label><span class="adat">Telefonszám</span></label>
                <label for="number"></label><input type="tel" id="number" name="number" placeholder="Új telefonszám">
            </div>

            <div class="input">
                <label><span class="adat">Jelszó</span></label>
                <label for="password"></label><input type="password" id="password" name="password" placeholder="Új jelszó">
            </div>
        </div>
        <input type="submit" value="Mentés">
    </form>
</div>

<form action="Profil.php" method="post">
    <div class="button">
        <input type="submit" value="Vissza a profilra">
    </div>
</body>
</html>
