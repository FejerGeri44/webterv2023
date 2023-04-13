<?php

if (isset($_POST['submit'])) {
    $score = 0;
    if ($_POST['question1'] === 'Budapest') {
        $score += 1;
    }
    if ($_POST['question2'] === '7') {
        $score += 1;
    }
    if ($_POST['question8'] === 'B') {
        $score += 1;
    }

    $message = 'Elért pontszám: ' . $score;
}