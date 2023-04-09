<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>A háború kirobbanasa</title>
    <link rel="stylesheet" href="../public/CSSfajlok/3oldal.css">
    <link rel="icon" href="../public/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="navbar">
    <ul>
        <li><a href="1oldal.php">A második világháború előzményei</a></li>
        <li><a href="2oldal.php">Adolf Hitler</a></li>
        <li><a class="active" href="3oldal.php">A háború kirobbanása</a></li>
        <li><a href="4oldal.php">A háború kimenetele</a></li>
        <li><a href="5oldal.php">Érdekességek</a></li>
        <li><a href="Profil.php">Profil</a></li>
    </ul>
</div>

<div class="container"><br>
    <p class="title">A háború kirobbanása</p>
</div>
<hr><hr>
<br><br><br><br>

<div class="container">
    <p class="text"><span>Adolf Hitler</span> egyik legnagyobb
        külpolitikai célja Németország dicsőségének visszaszerzése volt, amelynek első
        két lépése az Anschluss és a Szudéta-vidék bekebelezése volt.</p>
</div>

<figure class="slide">
    <img src="../Képek/ujsag.jpg" alt="Megszállás"/>
    <figcaption>
        <h3>Lengyelországi hadjárat</h3>
        <p>Lengyelország megszállását 1939-ben a hitleri Német Birodalom, a sztálini Szovjetunió és egy kisebb németbarát szlovák kontingens hajtotta végre.</p><a href="https://hu.wikipedia.org/wiki/Lengyelorsz%C3%A1gi_hadj%C3%A1rat" target="_blank" class="read-more">Bővebben</a>
    </figcaption>
</figure>

<p class="text1"><span>1939. szeptember 1-jén</span> a két nagyhatalmi óriás megtámadta a a kisebb
    területtel rendelkező Lengyelországot. Szeptember 27-én Varsó kapitulált,
    Lengyelországot pedig a németek és a szovjetek felosztották egymás között.
</p>

<div class="container"><br><br><br><br><br><br><br><br><br>
    <p class="smallttitle"><strong>A furcsa háború:</strong></p>
    <p class="text">1939. szeptember 3-án a szövetségesek <span>ultimátumot</span> küldtek Németországnak, amely a hadműveletek
        leállítását és a tárgyalások felvételét követelte. Mivel ez nem valósult meg,
        az <strong>Egyesült Királyság</strong> és <strong>Franciaország</strong> is hadat üzent <strong>Németországnak</strong>,
        de kisebb összetűzéseken kívül nem történtek háborús cselekmények, ezért hívják ezt furcsa háborúnak <em>(drôle de guerre)</em>.</p>
</div><br>

<table class="tablehead">
    <caption>Az ellenfelek cselekményei</caption>
    <tr>
        <th>Szövetségesek</th>
        <th>Harmadik birodalom</th>
    </tr>
    <tr>
        <th><blockquote><span>
            Politikai</span> lépések
        </blockquote></th>
        <th><blockquote>
            Igencsak jelentős <span>katonai sikerek</span><br>
            Dánia megszállása<br>
            Svéd nyersanyagok biztosítása
        </blockquote></th>
    </tr>
    <tr>
        <th><blockquote>
            Jelentős <span>katonai beavatkozás</span> nem volt
        </blockquote></th>
        <th><blockquote>
            Novégia <span>sikeres megszállása</span>
        </blockquote></th>
    </tr>
    <tr>
        <th><blockquote>
            <span> Sikertelen</span> katonai hadművelet
        </blockquote></th>
        <th><blockquote>
            Az északi országok elfoglalása nagy győzelmet jelentett <span>politikailag</span> és  <span>gazdaságilag.</span>
        </blockquote></th>
    </tr>
</table><br><br>

<figure class="slide">
    <img src="../Képek/Churchill.jpg" alt="Churchill"/>
    <figcaption>
        <h3>Winston Churchill</h3>
        <p>Kiemelkedő képességű államférfi, szónok és stratéga, a brit hadsereg tisztje.</p><a href="https://en.wikipedia.org/wiki/Winston_Churchill" target="_blank" class="read-more">Bővebben</a>
    </figcaption>
</figure>

<p class="text1">Politikai sikertelenségei és személyes egészsége miatt 1940. május 10-én,
    röviddel a norvégiai brit kudarc után Chamberlain brit miniszterelnök lemondott,
    utóda <span>Winston Churchill</span> lett.</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p class="oldalszam"> 3. oldal </p>
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