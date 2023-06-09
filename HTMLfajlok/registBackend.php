<?php
include "functions.php";
session_start();
$users = loadUsers("Felhasznalok.txt");
$bakik = [];

if (isset($_POST["regisztracio"])) {

    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $passwordagain = $_POST["passwordagain"];
    $gender = NULL;
    $quizdefault = 0;
    $jogosultsag = "user";

    if (!isset($_POST["name"]) || trim($_POST["name"]) === "")
        $bakik[] = "A neved megadása kötelező!";

    if (!isset($_POST["username"]) || trim($_POST["username"]) === "")
        $bakik[] = "A felhasználóneved megadása lötelező!";

    if (!isset($_POST["email"]) || trim($_POST["email"]) === "")
        $bakik[] = "Az email címed megadása kötelező!";

    if (!isset($_POST["number"]) || trim($_POST["number"]) === "")
        $bakik[] = "A telefonszámod kötelező!";

    if (!isset($_POST["password"]) || trim($_POST["password"]) === "" || !isset($_POST["passwordagain"]) || trim($_POST["passwordagain"]) === "")
        $bakik[] = "A jelszó és az ellenőrző jelszó megadása kötelező!";

    if (isset($_POST["gender"]))
        $gender = $_POST["gender"];

    if (strlen($username) < 5)
        $bakik[] = "A felhasználónevednek legalább 5 karakter hosszúnak kell lennie!";

    if (strlen($password) < 4)
        $bakik[] = "A jelszónak legalább 4 karakter hosszúnak kell lennie!";

    if (strlen($passwordagain) < 4)
        $bakik[] = "Az ellenőrző jelszónak legalább 4 karakter hosszúnak kell lennie!";

    if ($password !== $passwordagain)
        $bakik[] = "A jelszó és az ellenőrző jelszó nem egyezik meg!";

    foreach ($users as $user) {
        if ($user["username"] === $username)
            $bakik[] = "A felhasználónév már foglalt!";
    }

    $lines = file('Felhasznalok.txt');
    foreach ($lines as $line) {
        $user = explode(',', $line);
        if ($user[2] == $email) {
            $bakik[] = "Ezzel az email címmel már regisztráltak!";
        }
    }

    if ($email == "fejer.gergo44@gmail.com" || $email == "csillek99@gmail.com"){
        $jogosultsag = "admin";
    }

    if (count($bakik) === 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $users[] = ["name" => $name, "username" => $username, "email" => $email, "number" => $number, "password" => $password, "gender" => $gender, "quizpontszam" => $quizdefault, "jogosultsag" => $jogosultsag];
        saveUsers("Felhasznalok.txt", $users);
        $successful = TRUE;
        header("Location: Bejelentkezes.php");

    } else {
        if (count($bakik) > 0) {
            echo "<ul>";
            foreach ($bakik as $baki) {
                echo "<li>$baki</li>";
            }
            echo "</ul>";
            echo "<form action='Regisztracio.php' method='post'><input type='submit' value='Vissza a regisztrációra'></form>";
        }
        $unsuccessful = FALSE;
    }
}
