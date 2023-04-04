<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <link rel="stylesheet" href="/CSSfajlok/Profil.css">
    <link rel="icon" type="image/ico" href="../Képek/icon.webp"><!-- TODO -->
</head>
<body>

<div class="navbar">
    <ul>
        <li><a href="index.php?view=1oldal">A második világháború előzményei</a></li>
        <li><a href="index.php?view=2oldal">Adolf Hitler</a></li>
        <li><a href="index.php?view=3oldal">A háború kirobbanása</a></li>
        <li><a href="index.php?view=4oldal">A háború kimenetele</a></li>
        <li><a href="index.php?view=5oldal">Érdekességek</a></li>
        <li><a class="active" href="index.php?view=Profil">Profil</a></li>
    </ul>
</div>

<div class="container"><br>
    <p class="title">Profil</p>
</div>
<hr><hr>
<div class="navbar">
    <ul>
        <li><a href="index.php?view=Quiz">Quiz</a></li>
        <li><a href="index.php?view=Filmertekelo">Filmek</a></li>
        <li><a href="index.php?view=Chat">Chat</a></li>
    </ul>
</div>
<hr><br><br><br><br>
<form action="index.php?post=Bejelentkezes" method="post">
    <div class="button">
        <input type="submit" value="Kijelentkezés">
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
        if (user !== "")
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