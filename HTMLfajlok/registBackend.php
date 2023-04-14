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
    $film1 = 0;
    $film2 = 0;
    $film3 = 0;
    $quizdefault = 0;

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

    if (count($bakik) === 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $users[] = ["name" => $name, "username" => $username, "email" => $email, "number" => $number, "password" => $password, "gender" => $gender, "avatar" => "avatar.jpg", "film1" => $film1, "film2" => $film2, "film3" => $film3, "quizpontszam" => $quizdefault];
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

