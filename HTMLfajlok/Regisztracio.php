<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
    <link rel="stylesheet" href="../public/CSSfajlok/Regisztracio.css">
    <link rel="icon" href="favicon.webp">
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