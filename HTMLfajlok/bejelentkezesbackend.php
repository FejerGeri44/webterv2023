<?php
include "functions.php";
session_start();
$users = loadUsers("Felhasznalok.txt");
$bakik = [];

if (isset($_POST["bejelentkezes"])) {

    if (!isset($_POST["username"]) || trim($_POST["username"]) === "") {
        $bakik = "A felhasználóneved megadasa kötelező!";

    } elseif(!isset($_POST["password"]) || trim($_POST["password"]) === "") {
        $bakik = "A jelszó megadása kötelező!";

    }else{
        $username = $_POST["username"];
        $password = $_POST["password"];

        foreach ($users as $user) {
            if ($user["username"] === $username && password_verify($password, $user["password"]) && $user["jogosultsag"] === "user") {
                header("Location: Profil.php");
            }elseif ($user["username"] === $username && password_verify($password, $user["password"]) && $user["jogosultsag"] === "admin") {
                header("Location: Adminprofil.php");
            }
            $bakik[] = "Hibás felhasználónév vagy jelszó!";
        }
    }
    if (count($bakik) > 0) {
        echo "<ul>";
        foreach ($bakik as $baki) {
            echo "<li>$baki</li>";
        }
        echo "</ul>";
        echo "<form action='Bejelentkezes.php' method='post'><input type='submit' value='Vissza'></form>";
    }
}
