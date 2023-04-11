<?php
function saveUsers($path, $users) {
    $file = fopen($path, "w");
    if (!$file)
        die("Baki: A fájl megnyitása nem sikerült!");

    foreach($users as $user) {
        $serialized_user = serialize($user);
        fwrite($file, $serialized_user . "\n");
    }
    fclose($file);
}
function loadUsers($path) {
    $users = [];

    $file = fopen($path, "r");
    if (!$file)
        die("Baki: A fájl megnyitása nem sikerült!");

    while (($line = fgets($file)) !== FALSE) {
        $user = unserialize($line);
        $users[] = $user;
    }
    fclose($file);
    return $users;
}