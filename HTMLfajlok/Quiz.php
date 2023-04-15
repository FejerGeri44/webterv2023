<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="../public/CSSfajlok/Quiz.css">
    <link rel="icon" href="../public/favicon.webp">
</head>
<body class="hatter">
<div class="navbar">
    <ul>
        <li><a class="active" href="../HTMLfajlok/Quiz.php">Quiz</a></li>
        <li><a href="../HTMLfajlok/Filmertekelo.php">Filmek</a></li>
        <li><a href="../HTMLfajlok/Modositas.php">Adatmódosítás</a></li>
    </ul>
</div>
<div class="container"><br>
    <p class="title">Quiz</p>
</div>
<hr><hr>
<div class="ablak">
    <form action="Quizertekeles.php" method="post">
        <div class="mid">
            <label><h2><span class="adat">Email cím</span></h2></label><br>
            <label for="email"></label><input class="option_email" id="email" type="email" name="email" placeholder="A regisztrált email címed" required><br>
            <label><span class="adat">(Megadása kötelező a quiz kitöltéséhez)</span></label>
        </div>
        <h2>1. Kérdés:</h2>
        <p>Mikor van Adolf Hitler Születésnapja?</p>
        <div>
            <input type="radio" id="1a" name="elso" value="A">
            <label for="1a">Március 11.</label>
        </div>
        <div>
            <input type="radio" id="1b" name="elso" value="B">
            <label for="1b">Április 20.</label>
        </div>
        <div>
            <input type="radio" id="1c" name="elso" value="C">
            <label for="1c">Február 23.</label>
        </div>
        <h2>2. Kérdés:</h2>
        <p>Minek köszönhetően halt meg Adolf Hitler?</p>
        <label>
            <select class="option_email" name="masodik">
                <option value="default">Nem tudom :(</option>
                <option value="Rage">Road rage</option>
                <option value="Gumimaci">Mérges gumimacik</option>
                <option value="Bomba">Bombatámadás</option>
                <option value="Rulett">Orosz rulett</option>
                <option value="Fenekeles">Anyja elfenekelte</option>
                <option value="Girlfriend">Angry Girlfriend</option>
            </select>
        </label>
        <br><br>
        <h2>3. Kérdés:</h2>
        <p>Mi volt Magyarország államformája a második világháború alatt?</p>
        <div>
            <input type="radio" id="3a" name="harmadik" value="A">
            <label for="3a">Alkotmányos monarchia</label>
        </div>
        <div>
            <input type="radio" id="3b" name="harmadik" value="B">
            <label for="3b">Köztársaság</label>
        </div>
        <div>
            <input type="radio" id="3c" name="harmadik" value="C">
            <label for="3c">Királyság</label>
        </div>
        <div>
            <input type="radio" id="3d" name="harmadik" value="D">
            <label for="3d">ELSŐ GALAKTIKUS BIRODALOM</label>
        </div>
        <h2>4. Kérdés:</h2>
        <p>Napi hány szál szivart szívott el átlagosan Winston Churchill?</p>
        <label>
            <input type="number" name="negyedik">
        </label>
        <br><br>
        <h2>5. Kérdés:</h2>
        <p>Melyik állítás igaz?</p>
        <div>
            <input type="radio" id="5a" name="otodik" value="A">
            <label for="5a">Adolf Hitler vegetáriánus volt</label>
        </div>
        <div>
            <input type="radio" id="5b" name="otodik" value="B">
            <label for="5b">Adolf Hitler festőnek tanult tovább</label>
        </div>
        <div>
            <input type="radio" id="5c" name="otodik" value="C">
            <label for="5c">Sheev Palpatine végrehajtatta klóncsapataival a 66-os parancsot</label>
        </div>
        <h2>6. Kérdés:</h2>
        <p>Kinek aranyosabb a bajuszkája?</p>
        <div>
            <input type="radio" id="6a" name="hatodik" value="A">
            <label for="6a">Neville Chamberlain</label>
        </div>
        <div>
            <input type="radio" id="6b" name="hatodik" value="B">
            <label for="6b">Joszif Visszarionovics Sztálin</label>
        </div>
        <div>
            <input type="radio" id="6c" name="hatodik" value="C">
            <label for="6c">Adolf Hitler</label>
        </div>
        <div>
            <input type="radio" id="6d" name="hatodik" value="D">
            <label for="6d">Dr. Gergely Tamás</label>
        </div>
        <h2>7. Kérdés:</h2>
        <p>Melyik évben volt a Kurszki csata?</p>
        <label>
            <input type="number" name="hetedik">
        </label>
        <br><br>
        <h2>8. Kérdés:</h2>
        <p>Mi volt a Szovjetúnió megszállási tervének taktikai neve?</p>
        <div>
            <input type="radio" id="8a" name="nyolcadik" value="A">
            <label for="8a">Mária hadművelet</label>
        </div>
        <div>
            <input type="radio" id="8b" name="nyolcadik" value="B">
            <label for="8b">Habakuk projekt</label>
        </div>
        <div>
            <input type="radio" id="8c" name="nyolcadik" value="C">
            <label for="8c">Barbarossza hadművelet</label>
        </div>
        <div>
            <input type="radio" id="8d" name="nyolcadik" value="D">
            <label for="8d">69-es parancs (NICE)</label>
        </div>
        <h2>9. Kérdés:</h2>
        <p>Melyik ország emberi áldozata volt a legsúlyosabb a háborúban?</p>
        <div>
            <input type="radio" id="9a" name="kilencedik" value="A">
            <label for="9a">Angol Királyság</label>
        </div>
        <div>
            <input type="radio" id="9b" name="kilencedik" value="B">
            <label for="9b">Német Birodalom</label>
        </div>
        <div>
            <input type="radio" id="9c" name="kilencedik" value="C">
            <label for="9c">Szovjetúnió</label>
        </div>
        <div>
            <input type="radio" id="9d" name="kilencedik" value="D">
            <label for="9d">Franciaország</label>
        </div>
        <div>
            <input type="radio" id="9e" name="kilencedik" value="E">
            <label for="9e">Japán</label>
        </div>
        <div>
            <input type="radio" id="9f" name="kilencedik" value="F">
            <label for="9f">Kína</label>
        </div>
        <br>
        <input type="submit" name="submit" class="gomb" value="Küldés">
    </form>
</div>
<form action="Profil.php" method="post">
    <div class="mid">
        <input type="submit" class="myB" value="Vissza a profilra">
    </div>
</body>
</html>