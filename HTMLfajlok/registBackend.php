<?php
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

    if ($password !== $passwordagain)
        $bakik[] = "A jelszó és az ellenőrző jelszó nem egyezik meg!";

    foreach ($users as $user) {
        if ($user["username"] === $username)
            $bakik[] = "A felhasználónév már foglalt!";
    }

    if (count($bakik) === 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $users[] = ["name" => $name, "username" => $username, "email" => $email, "number" => $number, "password" => $password, "gender" => $gender];
        saveUsers("Felhasznalok.txt", $users);
        $successful = TRUE;
        header("Location: Bejelentkezes.php");
    } else {
        $unsuccessful = FALSE;
    }
}

function saveUsers($path, $users) {
    $file = fopen($path, "w");
    if (!$file)
        die("Baki: A fájl megnyitása nem sikerült!");

    foreach($users as $user) {
        $serialized_user = serialize($user);
        fwrite($file, $serialized_user . "\n");
    }
    fclose($file);
    header("1oldal.php");
}
function loadUsers($path) {
    $users = [];

    $file = fopen($path, "r");
    if (!$file)
        die("Baki: A fájl megnyitása nem sikerült!");

    while (($line = fgets($file)) !== FALSE) {
        $user = unserialize($line);
        $users[] = $user;
    }
    fclose($file);
    return $users;
}

