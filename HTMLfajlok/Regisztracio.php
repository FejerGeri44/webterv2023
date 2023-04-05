<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
    <link rel="stylesheet" href="/CSSfajlok/Regisztracio.css">
    <link rel="icon" href="favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Regisztráció</div>
    <form action="index.php?view=1oldal" method="post">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Teljes név*</span>
                <label>
                    <input type="text" placeholder="Add meg a nevedet" required>
                </label>
            </div>

            <div class="input-box">
                <label for="username-label">Felhasználónév<span class="required">*</span>:</label>
                <input type="text" id="username-label" placeholder="Add meg a felhasználóneved" required>
            </div>

            <div class="input-box">
                <label for="email-label">E-mail cím:<span class="required">*</span></label>
                <input type="email" id="email-label" placeholder="Add meg az email címedet" required>
            </div>

            <div class="input-box">
                <label for="year-of-birth-label">Mikor született:</label>
                    <input type="date" id="year-of-birth-label" required>
            </div>

            <div class="input-box">
                <label for="password-label">Jelszó<span class="required">*</span>:</label>
                <input type="password" id="password-label" placeholder="Add meg egy jelszót" required>
            </div>

            <div class="input-box">
                <label for="password-check-label">Jelszó ismét<span class="required">*</span>:</label>
                <input type="password" id="password-check-label" placeholder="Add meg még egyszer a jelszót" required>
            </div>
        </div>


        <div class="gender-details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
            <input type="radio" name="gender" id="dot-3">
            <span class="gender-title">Nemed*</span>
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
            <input type="submit" value="Regisztráció">
        </div>
    </form>
    <form action="index.php?post=Bejelentkezes" method="post">
        <div class="button">
            <input type="submit" value="Ugrás a Bejelentkezésre">
        </div>
    </form>
</div>
</body>
</html>