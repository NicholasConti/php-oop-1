<?php
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Generi.php';

// genere del primo film
$genGatto = [
    new Generi('Cartone-Animato'),
    new Generi('Fanatsy'),
    new Generi('Avventura')
];
//istanza primo film
$gatto = new Movie('Il gatto con gli stivali', 2023, 'lorem', 'it', $genGatto);

// genere del secondo film
$genRick = [
    new Generi('Cartone-Animato'),
    new Generi('Commedia')
];

//istanza secondo film
$rick = new Movie('Rick e Morty', 2022, 'lorem ipsum ciao', 'en', $genRick);

// echo $gatto->titolo . '<br>';
// echo $gatto->anno . '<br>';
// echo $gatto->trama . '<br>';
// echo $gatto->linguaOriginale . '<br>';
// echo $gatto->genere . '<br>';
// echo '<br>' . '<br>';
//if ($genGatto instanceof Generi) {
foreach ($gatto as $key => $value) {
    if ($key == 'titolo') {
        echo $value;
    } elseif ($key == 'anno') {
        echo $value;
    } elseif ($key == 'trama') {
        echo $value;
    } elseif ($key == 'linguaOriginale') {
        echo $value;
    } else if ($key == 'genere') {
        foreach ($value as $gen) {
            echo $gen->genere . ' ';
        };
        echo '<br>';
    }
    echo '<br>';
}
//}
foreach ($rick as $key => $value) {
    if ($key == 'titolo') {
        echo $value;
    } elseif ($key == 'anno') {
        echo $value;
    } elseif ($key == 'trama') {
        echo $value;
    } elseif ($key == 'linguaOriginale') {
        echo $value;
    } else if ($key == 'genere') {
        foreach ($value as $gen) {
            echo $gen->genere . ' ';
        };
        echo '<br>';
    }
    echo '<br>';
}
