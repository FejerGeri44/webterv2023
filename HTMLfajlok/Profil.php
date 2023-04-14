<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <link rel="stylesheet" href="../public/CSSfajlok/Profil.css">
    <link rel="icon" href="../public/favicon.webp">
</head>
<body>

<div class="navbar">
    <ul>
        <li><a href="1oldal.php">A második világháború előzményei</a></li>
        <li><a href="2oldal.php">Adolf Hitler</a></li>
        <li><a href="3oldal.php">A háború kirobbanása</a></li>
        <li><a href="4oldal.php">A háború kimenetele</a></li>
        <li><a href="5oldal.php">Érdekességek</a></li>
        <li><a class="active" href="#">Profil</a></li>
    </ul>
</div>

<div class="container"><br>
    <p class="title">Profil</p>
</div>
<hr><hr>
<div class="navbar">
    <ul>
        <li><a href="Quiz.php">Quiz</a></li>
        <li><a href="Filmertekelo.php">Filmek</a></li>
        <li><a href="Chat.php">Chat</a></li>
    </ul>
</div>
<hr><br><br><br><br>

<div class="ablak">
    <div class="title">Adatmódosítás</div>
    <br><br><br><br>

    <form action="usermodositas.php" method="post">
        <div class="adatok">
            <div class="input">
                <label><span class="adat">Email cím*</span></label>
                <label for="email"></label><input type="email" id="email" name="email" placeholder="A regisztrált email címed" required>
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
        <br><br>
        <input class="button" type="submit" value="Mentés">
    </form>
</div>
<br>

<form action="Bejelentkezes.php" method="post">
    <div>
        <input class="button" type="submit" value="Kijelentkezés">
    </div>
</form>
<script>
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        let user = getCookie("username");
        if (user !== ""){}
        else {
            user = prompt("Please enter your name:", "");
            if (user !== "" && user != null) {
                setCookie("username", user, 365);
            }
        }
    }
</script>
</body>
</html>