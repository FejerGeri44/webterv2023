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
                    <input type="text" placeholder="Add meg a nevedet" name="name" required>
                </label>
            </div>

            <div class="input-box">
                <label for="username-label">Felhasználónév<span class="required" >* (Minimum 5 karakter)</span>:</label>
                <input type="text" id="username-label" name="username" placeholder="Add meg a felhasználóneved" required>
            </div>

            <div class="input-box">
                <label for="email-label">E-mail cím:<span class="required">*</span></label>
                <input type="email" id="email-label" name="email" placeholder="Add meg az email címedet" required>
            </div>

            <div class="input-box">
                <label for="number-label">Telefonszám:<span class="required">*</span></label>
                <input type="tel" id="number-label" name="number" placeholder="Add meg a telefonszámodat" required>
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
            <input type="radio" name="gender" id="dot-1" value="f">
            <input type="radio" name="gender" id="dot-2" value="n">
            <input type="radio" name="gender" id="dot-3" value="o">
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
if (isset($_POST['regisztracio'])){
    $abs_path = __DIR__ . "/Felhasznalok.txt";
    $file = fopen($abs_path, "a");
    if($file !== false){

        $rows = file("Felhasznalok.txt");
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $password = $_POST["password"];
        $passwordagain = $_POST["passwordagain"];
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
        $gender = NULL;
        $hibak = [];

        if (isset($_POST["regisztracio"])) {

            if (!isset($_POST["name"]) || trim($_POST["name"]) === "") {
                $hibak[] = "A neved megadása kötelező!";
            }
            if (!isset($_POST["username"]) || trim($_POST["username"]) === "") {
                $hibak[] = "A felhasználónév megadása kötelező!";
            }
            if (!isset($_POST["email"]) || trim($_POST["email"]) === "") {
                $hibak[] = "Az email címed megadása kötelező!";
            }
            if (!isset($_POST["number"]) || trim($_POST["number"]) === "") {
                $hibak[] = "A telefonszámod megadása kötelező!";
            }
            if (!isset($_POST["password"]) || trim($_POST["password"]) === "" || !isset($_POST["passwordagain"]) || trim($_POST["passwordagain"]) === "") {
                $hibak[] = "A jelszó és az ellenőrző jelszó megadása kötelező!";
            }
            if (!isset($_POST["gender"]) || trim($_POST["gender"]) === "") {
                $hibak[] = "A nemed megadása kötelező!";
            }
            if (isset($_POST["gender"])) {
                $gender = $_POST["gender"];
            }
            if (strlen($username) < 5){
                $hibak[] = "A felhasználónevednek legalább 5 karakterből kell állnia!";
            }
            if (strlen($password) < 4){
                $hibak[] = "A jelszónak legalább 4 karakter hosszúnak kell lennie!";
            }
            if ($password !== $passwordagain) {
                $hibak[] = "A jelszó és az ellenőrző jelszó nem ugyanaz!";
            }
            if (strlen($number) !== 10) {
                $hibak[] = "A telefonszámodnak 10 karakternek kell lennie!";
            }
            if (count($hibak) === 0) {
        $siker = TRUE;
    } else {
        $siker = FALSE;
    }
}
        foreach($rows as $row){
            $user = explode(",", $row);
            if($user[1] == $username || $user[2] == $email){
                echo "Az adott email cím vagy felhasználónév már regisztrálva van!";
                fclose($file);
                exit();
            }
        }

        $new_user = array($name, $username, $email, $number, $password_hashed, $gender);
        $new_user_string = implode(",", $new_user);
        fwrite($file, $new_user_string);
        fclose($file);
        echo "Sikeres regisztráció!";
    } else {
        echo "Hiba történt a fájl megnyitása során.";
    }
}
?>
