<?php
function getRoutes(){
    return array(
        "htmlLocations" => array(
            "1oldal" => "../HTMLfajlok/1oldal.php",
            "2oldal" => "../HTMLfajlok/2oldal.php",
            "3oldal" => "../HTMLfajlok/3oldal.php",
            "4oldal" => "../HTMLfajlok/4oldal.php",
            "5oldal" => "../HTMLfajlok/5oldal.php",
            "Profil" => "../HTMLfajlok/Profil.php",
            "Quiz" => "../HTMLfajlok/Quiz.php",
            "Filmertekelo" => "../HTMLfajlok/Filmertekelo.php",
            "Chat" => "../HTMLfajlok/Chat.php",
        ),
        "postLocations" => array(
            "Profil" => "../HTMLfajlok/Profil.php",
            "Bejelentkezes" => "../HTMLfajlok/Bejelentkezes.php",
            "Regisztracio" => "../HTMLfajlok/Regisztracio.php",
        )
    );
}


if(isset($_REQUEST["css"])){
    $routes = getRoutes();
    //var_dump($routes);
    echo file_get_contents($routes["cssLocations"][$_REQUEST["css"]]);
}