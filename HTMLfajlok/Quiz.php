<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="../public/CSSfajlok/altalanos.css">
    <link rel="icon" href="../public/favicon.webp">
</head>
<body class="hatter">
<div class="navbar">
    <ul>
        <li><a class="active" href="../HTMLfajlok/Quiz.php">Quiz</a></li>
        <li><a href="../HTMLfajlok/Filmertekelo.php">Filmek</a></li>
        <li><a href="../HTMLfajlok/Modositas.php">Chat</a></li>
    </ul>
</div>
<div class="container"><br>
    <p class="title">Quiz</p>
</div>
<hr><hr>

<div class="container">
    <form action="Quizertekeles.php" method="post">
        <p>1. Mi a fővárosa Magyarországnak?</p>
        <label>
            <select name="question1">
                <option value="Budapest">Budapest</option>
                <option value="Bukarest">Bukarest</option>
                <option value="Belgrád">Belgrád</option>
            </select>
        </label>
        <br><br>
        <p>2. Hány kontinens van a Földön?</p>
        <label>
            <input type="text" name="question2">
        </label>
        <br><br>
        <p>8. Melyik a legnagyobb állat a világon?</p>
        <div>
            <input type="radio" id="q8-a" name="question8" value="A">
            <label for="q8-a">Elefánt</label>
        </div>
        <div>
            <input type="radio" id="q8-b" name="question8" value="B">
            <label for="q8-b">Kék bálna</label>
        </div>
        <div>
            <input type="radio" id="q8-c" name="question8" value="C">
            <label for="q8-c">Dinók</label>
        </div>

        <input type="submit" value="Küldés">

    </form>
</div>
<form action="Profil.php" method="post">
    <div class="myB">
        <input type="submit" value="Vissza a profilra">
    </div>
</body>
</html>