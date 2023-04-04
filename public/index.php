<?php

require_once "../db.php";
require_once  "router.php";

$routes = getRoutes();
if(!isset($_REQUEST["view"])) {
    header('Location: index.php?view=1oldal');
}
else {
    echo file_get_contents($routes["htmlLocations"][$_REQUEST["view"]]);
}