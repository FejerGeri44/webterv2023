<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $letezik = false;

    $file = "Felhasznalok.txt";
    $content = file_get_contents($file);
    $lines = explode("\n", $content);
    $new_lines = array();

    $baki = "";
if (!isset($_POST["email"]) || trim($_POST["email"]) === "") {
        $baki = "Az Email címed megadása kötelező az adatok módosításához!";
}

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
            $new_content = implode("\n", $new_lines);
            file_put_contents($file, $new_content);
        echo "Az adatok sikeresen módosítva lettek!";
    }

    if (strpos($content, "\n\n") !== false) {
        $content = str_replace("\n\n", "\n", $content);
        file_put_contents($file, $content);
    }
    echo "<form action='Profil.php' method='post'><input type='submit' value='Vissza'></form>";
}