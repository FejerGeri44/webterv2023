<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fun Factek</title>
    <link rel="stylesheet" href="/CSSfajlok/5oldal.css">
    <link rel="icon" href="favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="navbar">
    <ul>
        <li><a href="index.php?view=1oldal">A második világháború előzményei</a></li>
        <li><a href="index.php?view=2oldal">Adolf Hitler</a></li>
        <li><a href="index.php?view=3oldal">A háború kirobbanása</a></li>
        <li><a href="index.php?view=4oldal">A háború kimenetele</a></li>
        <li><a class="active" href="index.php?view=5oldal">Érdekességek</a></li>
        <li><a href="index.php?view=Profil">Profil</a></li>
    </ul>
</div>

<div class="container"><br>
    <p class="title">Érdekességek</p>
</div>
<hr><hr><br><br>

    <p class="text">A következő videó a háború paródiája</p>
<div class="container">
    <video controls width="640" height="360">
        <source src="storage.php?vid=Video">
    </video><br>
    <p class="text">Vajon ki tudod találni melyik híres úriember hangját hallhatod a felvételen?</p>
    <audio controls>
        <source src="storage.php?vid=Hanganyag">
    </audio>
</div>

<div class="listtitle">
    <p>Csak hogy biztosra menjünk ... itt van pár lehetséges Gentlemen.</p>
</div>

<ul class="list">
    <li>A betyár pókembör, azaz Parizer Péter</li>
    <li>A világ legbadassabb miniszterelnöke, aki minden nap whyskivel és szivarral kezdte a napot, Winston Churchill</li>
    <li>Charlie Chaplin morcos ikertestvére, Adolf Hitler</li>
    <li>Vaaaaaagy a legvalószínűbb, Darth Vader, az uralkodó pincsi kutyája</li>
</ul>

<p class="oldalszam"> 5. oldal </p><br>
<button id="myBtn" >☝️</button>
<script>
    const scrollToTopBtn = document.getElementById("myBtn");
    const rootElement = document.documentElement;

    function scrollToTop() {
        // Scroll to top logic
        rootElement.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
    scrollToTopBtn.addEventListener("click", scrollToTop);
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