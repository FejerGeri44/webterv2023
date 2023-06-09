<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>A második világháború előzményei</title>
    <link rel="stylesheet" href="../public/CSSfajlok/1oldal.css">
    <link rel="icon" href="../public/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body onload="checkCookie()">

<div class="navbar">
    <ul>
        <li><a class="active" href="#">A második világháború előzményei</a></li>
        <li><a href="2oldal.php">Adolf Hitler</a></li>
        <li><a href="3oldal.php">A háború kirobbanása</a></li>
        <li><a href="4oldal.php">A háború kimenetele</a></li>
        <li><a href="5oldal.php">Érdekességek</a></li>
        <li><a href="Profil.php">Profil</a></li>
    </ul>
</div>

<div class="container"><br>
    <p class="title">A második világháború Európában és előzményei</p>
</div>
<hr><hr>
<br><br>

<figure class="slide">
    <img src="../Képek/sorpuccs.jpg" alt="sörpuccs"/>
    <figcaption>
        <h3>A müncheni sörpuccs</h3>
        <p>A müncheni sörpuccs Adolf Hitler vezetésével lezajlott sikertelen, erőszakos hatalomátvételi kísérlet 1923-ban</p><a href="https://hu.wikipedia.org/wiki/M%C3%BCncheni_s%C3%B6rpuccs" target="_blank" class="read-more">Bővebben</a>
    </figcaption>
</figure>

<div class="container">
    <p class="text">Az első világháború elvesztését követően sok ország elégedetlen volt a békeszerződésekkel kapcsolatban.<br> Németország fő külpolitikai feladata a háborúban <span>elvesztett területeinek visszafoglalása</span> és a nemzetiszocialista elvekhez hűen az <span>élettér <em>(Lebensraum)</em> kialakítása</span> volt.</p>
</div>
<p class="text">A gazdasági válságot követően Németország gazdaságilag és politikailag is megerősödött, aminek közvetlen következménye a hadipar állam álltal rendszerezett újjáépítése volt.
    <br>


<table class="tablehead">
    <caption>Német haderő</caption>
    <tr>
        <th>I. Világháború</th>
        <th>Világháborúk között</th>
        <th>II. Világháború</th>
    </tr>
    <tr>
        <th><blockquote><span>
            2 millió 300 ezer</span> fő <br>
            cirkálók, csatahajók, rombolók <br>
            felderítő repülőgépek <br>
        </blockquote></th>
        <th><blockquote><span>
            100 ezer</span> fő <br>
            max 10 tonnás hajók <br>
            nem használhattak tengeralattjárókat <br>
            nem rendelkezhetett légierővel <br>
        </blockquote></th>
        <th><blockquote><span>
            20 millió 700 ezer</span> fő <br>
            páncélos hadosztályok <br>
            cirkálók, rombolók, csatahajók <br>
            vadász és bombázó flották <br>
        </blockquote></th>
    </tr>
</table><br><br>

<div class="container">
    <p class="listtitle"><strong>Németország gyors talpraállásának alapkövei:</strong></p>
</div>

<ul class="list">
    <li> Gazdasági válság hatására létrejött elégedetlenség, ami egy új rendnek esélyt adhatott</li>
    <li> Propaganda, ami a nemzeti egységet összekovácsolta</li>
    <li> Bűnösök keresése</li>
    <li> Antiszemitizmus</li>
    <li> Kommunisták</li>
    <li> Gazdasági fellendülés</li>
    <li> Politikai stabilitás</li>
</ul><br><br>

<figure class="slide">
    <img src="../Képek/pakt.jpg" alt="Orosz-német paktum"/>
    <figcaption>
        <h3>A Molotov-paktum</h3>
        <p>A német–szovjet megnemtámadási szerződés Moszkvában Vjacseszlav Molotov szovjet és Joachim von Ribbentrop német külügyminiszterek által aláírt megállapodás</p><a href="https://hu.wikipedia.org/wiki/Molotov%E2%80%93Ribbentrop-paktum" target="_blank" class="read-more">Bővebben</a>
    </figcaption>
</figure>

<div class="container">
    <p class="text"> A belpolitikai stabilitást elérve, Hitler nekiállhatott birodalma határainak kiterjesztéséhez.
        <span>1938. március 12-én</span> a német hadsereg bevonult Ausztriába, amit az első világhárús béke megtiltott.
        <span>1938. szeptember 30-án</span> diplomáciai úton sikerült a Németországhoz csatolni a többségében etnikai németek által lakott Szudéta-vidéket is.</p><br>
</div>

<p class="listtitle"><strong>A Ribbentrop-Molotov paktum:</strong></p><br>
<ul class="list">
    <li>A két kibékíthetetlennek hitt hatalom megegyezése: <span>1939. augusztus 23-án</span> a német-orosz megnemtámadási szerődés megkötése.<br><br></li>
    <li>A szerződés titkos záradékában rendelkeztek Európa keleti felének érdekszférákra történő felosztásáról.<br><br></li>
    <li><em>Hitler számára a sztálini szovjetunió nem volt valós szövetséges</em>, mivel általuk a kétfrontos háborút kívánta elkerülni, míg ellenségeit legyőzi a nyugaton.<br><br></li>
</ul>
<br><br><br>
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