<?php

$pontszam = 0;

if (isset($_POST['submit'])) {

    if (isset($_POST["elso"])) {
        $elsofeladat = $_POST["elso"];
    }
    if (isset($_POST["masodik"])) {
        $masodikfeladat = $_POST["masodik"];
    }
    if (isset($_POST["harmadik"])) {
        $harmadikfeladat = $_POST["harmadik"];
    }
    if (isset($_POST["negyedik"])) {
        $negyedikfeladat = $_POST["negyedik"];
    }
    if (isset($_POST["otodik"])) {
        $otodikfeladat = $_POST["otodik"];
    }
    if (isset($_POST["hatodik"])) {
        $hatodikfeladat = $_POST["hatodik"];
    }
    if (isset($_POST["hetedik"])) {
        $hetedikfeladat = $_POST["hetedik"];
    }
    if (isset($_POST["nyolcadik"])) {
        $nyolcadikfeladat = $_POST["nyolcadik"];
    }
    if (isset($_POST["kilencedik"])) {
        $kilencedikfeladat = $_POST["kilencedik"];
    }

    if (isset($_POST["elso"])){
        if ($elsofeladat == "B") {
            $pontszam++;
        }else{
            $pontszam--;
        }
    }
    if (isset($_POST["masodik"])){
        if ($masodikfeladat == "Rulett") {
            $pontszam++;
        }elseif ($masodikfeladat == "default"){
            $pontszam += 0;
        }else{
            $pontszam--;
        }
    }
    if (isset($_POST["harmadik"])){
        if ($harmadikfeladat == "C") {
            $pontszam++;
        }else{
            $pontszam--;
        }
    }
    if (isset($_POST["negyedik"])){
        if ($negyedikfeladat == "9") {
            $pontszam++;
        }
    }
    if (isset($_POST["otodik"])){
        if ($otodikfeladat == "A") {
            $pontszam++;
        }else{
            $pontszam--;
        }
    }
    if (isset($_POST["hatodik"])){
        if ($hatodikfeladat == "A" || $hatodikfeladat == "B" || $hatodikfeladat == "C" || $hatodikfeladat == "D") {
            $pontszam++;
        }
    }
    if (isset($_POST["hetedik"])){
        if ($hetedikfeladat == "1943") {
            $pontszam++;
        }
    }
    if (isset($_POST["nyolcadik"])){
        if ($nyolcadikfeladat == "C") {
            $pontszam++;
        }else{
            $pontszam--;
        }
    }
    if (isset($_POST["kilencedik"])){
        if ($kilencedikfeladat == "C") {
            $pontszam++;
        }else{
            $pontszam--;
        }
    }

}
echo "Az elért pontszámod: " . $pontszam;
echo "<form action='Profil.php' method='post'><input type='submit' value='Vissza a Profilhoz'></form>";