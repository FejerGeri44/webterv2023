<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Űrlap</title>
    <link rel="stylesheet" href="CSSfajlok/Urlap.css">
    <link rel="icon" href="favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Regisztráció</div>
    <form action="../HTMLfajlok/1oldal.php" method="post">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Teljes név*</span>
                <label>
                    <input type="text" placeholder="Add meg a nevedet" required>
                </label>
            </div>

            <div class="input-box">
                <span class="details">Felhasználónév*</span>
                <label>
                    <input type="text" placeholder="Add meg a felhasználóneved" required>
                </label>
            </div>

            <div class="input-box">
                <span class="details">Email cím*</span>
                <label>
                    <input type="email" placeholder="Add meg az email címedet" required>
                </label>
            </div>

            <div class="input-box">
                <span class="details">Mikor születtél?*</span>
                <label>
                    <input type="date" required>
                </label>
            </div>

            <div class="input-box">
                <span class="details">Jelszó*</span>
                <label>
                    <input type="password" placeholder="Add meg egy jelszót" required>
                </label>
            </div>

            <div class="input-box">
                <span class="details">Jelszó még egyszer*</span>
                <label>
                    <input type="password" placeholder="Add meg még egyszer a jelszót" required>
                </label>
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
</div>
<div class="container">
    <div class="title">Bejelentkezés</div>
    <form action="../HTMLfajlok/Profil.html" method="post">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Felhasználónév*</span>
                <label>
                    <input type="text" placeholder="Add meg a felhasználóneved" required>
                </label>
            </div>

            <div class="input-box">
                <span class="details">Email cím*</span>
                <label>
                    <input type="email" placeholder="Add meg az email címedet" required>
                </label>
            </div>
            <div class="input-box">
                <span class="details">Jelszó*</span>
                <label>
                    <input type="password" placeholder="Add meg egy jelszót" required>
                </label>
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Bejelentkezés">
        </div>
    </form>
</div>
</body>
</html>