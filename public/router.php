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

        )
    );
}
if(isset($_REQUEST["css"])){
    $routes = getRoutes();
    //var_dump($routes);
    echo file_get_contents($routes["cssLocations"][$_REQUEST["css"]]);
}