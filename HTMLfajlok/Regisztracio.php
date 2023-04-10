<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
    <link rel="stylesheet" href="../public/CSSfajlok/Regisztracio.css">
    <link rel="icon" href="../public/favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Regisztráció</div>
    <form action="Bejelentkezes.php" method="post">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Teljes név*</span>
                <label>
                    <input type="text" placeholder="Add meg a nevedet" name="name" required <?php if (isset($_POST['name'])) echo $_POST['name']; ?>>
                </label>
            </div>

            <div class="input-box">
                <label for="username-label">Felhasználónév<span class="required" >* (Minimum 5 karakter)</span>:</label>
                <input type="text" id="username-label" name="username" placeholder="Add meg a felhasználóneved" required <?php if (isset($_POST['username'])) echo $_POST['username']; ?>>
            </div>

            <div class="input-box">
                <label for="email-label">E-mail cím:<span class="required">*</span></label>
                <input type="email" id="email-label" name="email" placeholder="Add meg az email címedet" required <?php if (isset($_POST['email'])) echo $_POST['email']; ?>>
            </div>

            <div class="input-box">
                <label for="number-label">Telefonszám:<span class="required">*</span></label>
                <input type="tel" id="number-label" name="number" placeholder="Add meg a telefonszámodat" required <?php if (isset($_POST['number'])) echo $_POST['number']; ?>>
            </div>

            <div class="input-box">
                <label for="password-label">Jelszó<span class="required">* (Minimum 4 karakter)</span>:</label>
                <input type="password" id="password-label" name="password" placeholder="Add meg egy jelszót" required>
            </div>

            <div class="input-box">
                <label for="password-check-label">Jelszó ismét<span class="required">* (Minimum 4 karakter)</span>:</label>
                <input type="password" id="password-check-label" name="passwordagain" placeholder="Add meg még egyszer a jelszót" required>
            </div>
        </div>

        <div class="gender-details">
            <input type="radio" name="gender" id="dot-1" value="f" <?php if (isset($_POST['nem']) && $_POST['nem'] === 'F') echo 'checked'; ?>>
            <input type="radio" name="gender" id="dot-2" value="n" <?php if (isset($_POST['nem']) && $_POST['nem'] === 'F') echo 'checked'; ?>>
            <input type="radio" name="gender" id="dot-3" value="o" <?php if (isset($_POST['nem']) && $_POST['nem'] === 'F') echo 'checked'; ?>>
            <span class="gender-title">Nemed</span>
            <div class="category">
                <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Férfi</span>
                </label>

                <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Nő</span>
                </label>

                <label for="dot-3">
                    <span class="dot three"></span>
                    <span class="gender">Egyéb</span>
                </label>

            </div>
        </div>

        <div class="button">
            <input type="submit" name="regisztracio" value="Regisztráció">
        </div>
    </form>
    <form action="Bejelentkezes.php" method="post">
        <div class="button">
            <input type="submit" value="Ugrás a Bejelentkezésre">
        </div>
    </form>
</div>
</body>
</html>
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
?>