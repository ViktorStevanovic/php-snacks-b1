<?php
$array = [
    $partita1 = [
        'squadra-casa' => 'Milano',
        'punti-casa' => 20,
        'squadra-ospite' => 'Roma',
        'punti-ospite' => 21
    ],
    $partita2 = [
        'squadra-casa' => 'Palermo',
        'punti-casa' => 11,
        'squadra-ospite' => 'Vicenza',
        'punti-ospite' => 18
    ],
    $partita3 = [
        'squadra-casa' => 'Belgrado',
        'punti-casa' => 100,
        'squadra-ospite' => 'Parigi',
        'punti-ospite' => 1
    ],

];

var_dump($array);
$score = [];
// echo $array[0]['squadra-casa'];
foreach ($array as &$game) {
    foreach ($game as &$score) {
        echo $score;
    };
};
