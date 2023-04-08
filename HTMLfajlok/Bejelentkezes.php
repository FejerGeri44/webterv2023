<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" href="/CSSfajlok/Bejelentkezes.css">
    <link rel="icon" href="favicon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Bejelentkezés</div>
    <form action="index.php?post=Profil" method="post">
        <div class="user-details">
            <div class="input-box">
                <label for="username-label">Felhasználónév<span class="required">*</span>:</label>
                <input type="text" id="username-label" placeholder="Add meg a felhasználóneved" required>
            </div>
            <div class="input-box">
                <label for="password-label">Jelszó<span class="required">*</span>:</label>
                <input type="password" name="password" id="password-label" placeholder="Add meg egy jelszót" required>
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Bejelentkezés">
        </div>
    </form>
    <form action="index.php?post=Regisztracio" method="post">
        <div class="button">
            <input type="submit" value="Ugrás a regisztrációra">
        </div>
    </form>
</div>
</body>
</html>