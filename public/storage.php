<?php
require_once "../db.php";
require_once "VideoStream.php";
function getRoutes(){
    return array(
        "vid" => array(
            "Hanganyag" => "../resources/storage/Hanganyag.mp3",
            "Video" => "../resources/storage/Video.mp4",
        ),
        "img" => array(
            "avatar" => "../Képek/avatar.jpg",
            "Churchill" => "../Képek/Churchill.jpg",
            "katonak" => "../Képek/katonak.jpg",
            "Kurszki_csata" => "../Képek/Kurszki_csata.jpg",
            "oroszok" => "../Képek/oroszok.jpg",
            "pakt" => "../Képek/pakt.jpg",
            "sorpuccs" => "../Képek/sorpuccs.jpg",
            "ujsag" => "../Képek/ujsag.jpg",
            "hitler_career" => "../Képek/hitler_career.jpg",
            "hitler_szinesben" => "../Képek/hitler_szinesben.jpg",
            "downfall" => "../Képek/downfall.jpg"
        )
    );
}
$filePaths=getRoutes();
//////////////////////////////////

if(isset($_REQUEST["vid"])){
    if(file_exists($filePaths["vid"][$_REQUEST["vid"]])) {
        $stream = new VideoStream($filePaths["vid"][$_REQUEST["vid"]]);
        $stream->start();
    }
}else if(isset($_REQUEST["img"])) {
    if (file_exists($filePaths["img"][$_REQUEST["img"]])) {
        $img = imagecreatefromjpeg($filePaths["img"][$_REQUEST["img"]]);
        header('Content-Type: image/jpeg');
        imagejpeg($img);
        imagedestroy($img);
    }
}