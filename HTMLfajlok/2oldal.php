<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Adolf Hitler</title>
    <link rel="stylesheet" href="/CSSfajlok/2oldal.css">
    <link rel="icon" type="image/ico" href="../Képek/icon.webp"><!-- TODO -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="navbar">
    <ul>
        <li><a href="index.php?view=1oldal">A második világháború előzményei</a></li>
        <li><a class="active" href="index.php?view=2oldal">Adolf Hitler</a></li>
        <li><a href="index.php?view=3oldal">A háború kirobbanása</a></li>
        <li><a href="index.php?view=4oldal">A háború kimenetele</a></li>
        <li><a href="index.php?view=5oldal">Érdekességek</a></li>
        <li><a href="index.php?view=Profil">Profil</a></li>
    </ul>
</div>

<div class="container"><br>
    <p class="title">Adolf Hitler</p>
</div>
<hr><hr>
<br><br>

<table class="kozepre">
    <tr class="kozep">
        <th class="nev" colspan="2">Adolf Hitler</th>
    </tr>
    <tr class="kozep">
        <th class="ido" colspan="2">Németország Führere (vezetője)</th>
    </tr>
    <tr>
        <th class="balra"><strong>Hivatali idő:</strong></th>
        <th class="jobbra">1934. aug. 2. - 1945. ápr. 30.</th>
    </tr>
    <tr>
        <th class="balra"><strong>Született:</strong></th>
        <th class="jobbra">1889. ápr. 20. Braunau am Inn</th>
    </tr>
    <tr>
        <th class="balra"><strong>Elhunyt:</strong></th>
        <th class="jobbra">1945. ápr. 30. Berlin</th>
    </tr>
</table>

<ol type="I">
    <li class="list">Életének korai szakasza:</li>
</ol>
    <ul class="list">
        <li class="listaelem">Neveltetése abuzív volt apjának köszönhetően.</li>
        <li class="listaelem"><span>Hitlerre sokban hatott a nagynémet ideológia</span>, azonban későbbiekben ezen alaposan túllépett, és erősen kritizálta is ezen eszmerendszert a <span><strong>Mein Kampfban</strong></span>. Hatással volt még Hitlerre <span>Karl Lueger bécsi polgármester</span> populista, agresszív retorikája, akit <em><q>minden idők legnagyobb német polgármestereként</q></em> aposztrofált. </li>
    </ul>

<ol type="I">
    <li class="list">Festői tevékenysége:</li>
</ol>
<ul class="list">
    <li class="listaelem">Hitlert érzékenyen érintette <span>bukása a felvételi vizsgákon</span>, de ezt követően is festőként próbált megélni Bécsben,majd Münchenben, nem kezdett más szakma vagy munka keresésébe.</li>
    <li class="listaelem">Amikor az osztrák sorozótisztek megtalálták,festőművésznek vallotta magát,de hozzátette, hogy csak megélhetési okokból fest. Később még határozottabban elutasította magától a festészetet.</li>
</ul>

<ol type="I">
    <li class="list">Festői karrierje, valamint élete a háborúk között:</li>
</ol>
<ul class="list">
    <li class="listaelem">Harcolt az első világháborúban, viszont <span>sérülései miatt kórházba kényszerült</span>, ahol szeretett nemzetének bukásáról is értesült.</li>
    <li class="listaelem">A Wimari Köztársaság alatt <span>kémként szolgált</span> a kommunisták és a többi szélsőséges csoport ellen.</li>
    <li class="listaelem">Az egyik szélsőségesnek vélt csoport gyűlésén rádöbbent, hogy ezen politikai csoportosulással sokmindenben egyetértenek.</li>
    <li class="listaelem">Törekvéseinek köszönhetően az <span>NSDAP párt vezéralakja</span> lett.</li>
</ul>

<ol type="I">
    <li class="list">Életének korai szakasza:</li>
</ol>
<ul class="list">
    <li class="listaelem">Az <span>1930. szeptemberi</span> parlamenti választások előtt Hitler már <span>szinte korlátlan pénzeszközökkel és sajtóval rendelkezett</span> hatalmas kampányához.</li>
    <li class="listaelem">A válság közben egyre súlyosbodott. <span>1931 elején az országot elöntötte a csődhullám</span>, a munkanélküliek száma 5 millióra emelkedett. Az NSDAP igyekezett tovább szítani az elégedetlenséget, bojkottokat szervezett, utcai verekedéseket provokált, sztrájkokat kezdeményezett.</li>
    <li class="listaelem">Hitlert Hindenburg nevezte ki kancellárrá <span>1933. január 30</span>-án.</li>
</ul>

<p class="oldalszam"> 2. oldal </p><br>
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