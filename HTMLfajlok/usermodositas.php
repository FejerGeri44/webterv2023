<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $letezik = false;

    $lines = file("Felhasznalok.txt");
    $new_lines = array();

    $baki = "";
    if (!isset($_POST["email"]) || trim($_POST["email"]) === "")
        $baki = "Az Email címed megadása kötelező az adatok módosításához!";

    foreach ($lines as $line) {
        $user = explode(",", $line);
        if (isset($user[2]) && $user[2] == $email) {
            $letezik = true;
            if ($name != "") {
                $user[0] = $name;
            }
            if ($username != "") {
                $user[1] = $username;
            }
            if ($number != "") {
                $user[3] = $number;
            }
            if ($password != "") {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $user[4] = $password;
            }
            $new_line = implode(",", $user);
            array_push($new_lines, $new_line);
        } else {
            array_push($new_lines, $line);
        }
    }

    if ($baki !== ""){
        echo $baki;
    }
    if (!$letezik) {
        echo "A megadott email címhez nem tartozik felhasználó!";
    } else {
        file_put_contents("Felhasznalok.txt", implode("", $new_lines));
        echo "Az adatok sikeresen módosítva lettek!";
    }
    echo "<form action='Profil.php' method='post'><input type='submit' value='Vissza'></form>";
}
