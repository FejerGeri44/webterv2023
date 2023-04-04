<?php

require_once "../db.php";
require_once  "router.php";

$routes = getRoutes();
if(isset($_REQUEST["view"])) {
    echo file_get_contents($routes["htmlLocations"][$_REQUEST["view"]]);
}else if(isset($_REQUEST["post"])) {
    echo file_get_contents($routes["postLocations"][$_REQUEST["post"]]);
}
else {
    header('Location: index.php?view=1oldal');
}

