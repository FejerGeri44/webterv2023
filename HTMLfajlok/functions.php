<?php
function saveUsers($path, $users) {
    $file = fopen($path, "w");
    if (!$file) {
        die("Baki: A fájl megnyitása nem sikerült!");
    }
    foreach($users as $user) {
        $sor = $user["name"] . "," . $user["username"] . "," . $user["email"] . "," . $user["number"] . "," . $user["password"] . "," . $user["gender"] . "," . $user["quizpontszam"] ."\n";
        fwrite($file, $sor);
    }
    fclose($file);
}
function loadUsers($path) {
    $users = [];
    $file = fopen($path, "r");
    if (!$file) {
        die("Baki: A fájl megnyitása nem sikerült!");
    }

    while (!feof($file)) {
        $line = trim(fgets($file));
        if ($line !== "") {
            $user = explode(",", $line);
            $users[] = [
                "name" => $user[0],
                "username" => $user[1],
                "email" => $user[2],
                "number" => $user[3],
                "password" => $user[4],
                "gender" => $user[5],
                "quizpontszam" => $user[6]
            ];
        }
    }
    fclose($file);
    return $users;
}