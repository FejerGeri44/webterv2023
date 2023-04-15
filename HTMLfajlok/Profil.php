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

<?php

$users = file('Felhasznalok.txt');

usort($users, function($a, $b) {
    $a = explode(',', $a);
    $b = explode(',', $b);
    return $b[6] - $a[6];
});
$topharom = array_slice($users, 0, 3);
if (count($users) >= 3) {
    echo '<table>';
    echo '<tr><th colspan="3" class="rankingtitle">Quiz ranglétra</th></tr>';
    echo '<tr><th>Ranking</th><th>Felhasználónév</th><th>Legutóbbi pontszám</th></tr>';
    $i = 1;
    foreach ($topharom as $user) {
        $user = explode(',', $user);
        $class = '';
        switch ($i) {
            case 1:
                $class = 'elso';
                break;
            case 2:
                $class = 'masodik';
                break;
            case 3:
                $class = 'harmadik';
                break;
        }
        echo '<tr><td class="rank"><span class="' . $class . '">Top ' . $i . '</span></td><td>' . $user[1] . '</td><td>' . $user[6] . '</td></tr>';
        $i++;
    }
    echo '</table>';
}else{
    echo "<h2>Üzenet:</h2>";
    echo "<p>Amíg nincs regisztrálva legalább 3 felhasználó, addig a Quiz Ranglista megtekintése nem lehetséges!</p>";
}
?>
<br>
<table>
    <form method="post" action="Profil.php">
        <tr>
            <th>
                <div>
                <label for="email">Email cím:</label>
                </div>
            </th>
        </tr>
        <tr>
            <td>
                <div>
                <input type="text" name="email" id="email" required>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                <button class="gomb" type="submit" name="delete">Fiók törlése</button>
                </div>
            </td>
        </tr>
    </form>
</table>
<?php

if (isset($_POST['delete'])) {

    $email = $_POST["email"];
    $file = fopen("Felhasznalok.txt", "r");
    $ujfajl = "";
    $letezik = false;

    while ($line = fgets($file)) {
        $row = explode(",", $line);
        if ($row[2] == $email) {
            $letezik = true;
        } else {
            $ujfajl .= $line;
        }
    }
    fclose($file);

    $file = fopen("Felhasznalok.txt", "w");
    fwrite($file, $ujfajl);
    fclose($file);

    if ($letezik) {
        header("Location: Regisztracio.php");
    } else {
        echo "<p>Ezzel az email címmel nem található felhasználó.</p>";
    }
}
?>

<form action="Bejelentkezes.php" method="post">
    <div class="button">
        <input class="gomb" type="submit" value="Kijelentkezés">
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