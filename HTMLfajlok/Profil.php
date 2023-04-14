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
        <li><a href="Modositas.php">Chat</a></li>
    </ul>
</div>
<hr><br><br><br>

<div class="kep">
    <img id="myImage" src="../Képek/avatar.jpg" alt="profilkep">
    <br><br>
    <input type="file" onchange="changeImage(event)">
</div>

<form action="Bejelentkezes.php" method="post">
    <div class="button">
        <input type="submit" value="Kijelentkezés">
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