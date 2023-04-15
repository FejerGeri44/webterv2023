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

<div class="navbarka">
    <ul>
        <li><a href="Quiz.php">Quiz</a></li>
        <li><a href="Filmertekelo.php">Filmek</a></li>
        <li><a href="Modositas.php">Adatmódosítás</a></li>
    </ul>
</div>
<hr><br><br><br>

<div class="kep">
    <img id="myImage" src="../Képek/avatar.jpg" alt="profilkep">
    <br><br>
    <input id="fileBtn" type="file" onchange="changeImage(event)">
</div>

<?php
$users = file('Felhasznalok.txt');

usort($users, function($a, $b) {
    $a = explode(',', $a);
    $b = explode(',', $b);
    return $b[10] - $a[10];
});
$topharom = array_slice($users, 0, 3);

echo '<table>';
echo '<tr><th colspan="3" class="rankingtitle">Quiz ranglétra</th></tr>';
echo '<tr><th>Ranking</th><th>Felhasználónév</th><th>Legutóbbi pontszám</th></tr>';
foreach ($topharom as $user) {
    $user = explode(',', $user);
    echo '<tr><td class="rank"><span class="elso">Top 1</span></td><td>'.$user[1].'</td><td>'.$user[10].'</td></tr>';
}
if (count($users) == 1) {
    echo '<tr><td class="rank"><span class="masodik">Top 2</span></td><td colspan="2">nincs több felhasználó</td></tr>';
    echo '<tr><td class="rank"><span class="harmadik">Top 3</span></td><td colspan="2">nincs több felhasználó</td></tr>';
} elseif (count($users) == 2) {
    echo '<tr><td colspan="2">nincs több felhasználó</td></tr>';
}
echo '</table>';
?>

<form action="Bejelentkezes.php" method="post">
    <div class="button">
        <input class="gomb" type="submit" value="Kijelentkezés">
    </div>
</form>
<script>
    function changeImage(event) {
        let file = event.target.files[0];
        let filename = file.name;
        let reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function() {
            let image = document.getElementById("myImage");
            image.src = reader.result;
            updateProfilePicture(filename);
        }
    }

    function updateProfilePicture(filename) {
        let users = [];
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                users = JSON.parse(this.responseText);
                let currentUser = getCurrentUser(users);
                if (currentUser != null) {
                    currentUser.avatar = filename;
                    writeToFile(users);
                }
            }
        };
        xhttp.open("GET", "Felhasznalok.txt", true);
        xhttp.send();
    }

    function getCurrentUser(users) {
        let currentUser = null;
        let loggedInUser = localStorage.getItem("loggedInUser");
        users.forEach(function(user) {
            if (user.username === loggedInUser) {
                currentUser = user;
            }
        });
        return currentUser;
    }

    function writeToFile(users) {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                console.log("File updated");
            }
        };
        xhttp.open("POST", "updateFile.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("data=" + JSON.stringify(users));
    }
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