<?php
class Movie
{
    public $titolo;
    public $anno;
    public $trama;
    public $linguaOriginale;
    public $genere;

    public function __construct($_title, int $_year, $_story, $_ogLang, array $_gen)
    {
        $this->titolo = $_title;
        $this->anno = $_year;
        $this->trama = $_story;
        $this->changeLanguage($_ogLang);
        $this->genere = $_gen;
    }

    public function changeLanguage($lang)
    {
        if (($lang === 'it') || ($lang === 'IT')) {
            $lang = 'Italiano';
        } elseif (($lang === 'en') || ($lang === 'EN')) {
            $lang = 'Inglese';
        } elseif (($lang === 'jp') || ($lang === 'JP')) {
            $lang = 'Giapponese';
        } elseif (($lang === 'kr') || ($lang === 'KR')) {
            $lang = 'Koreano';
        }

        return $this->linguaOriginale = $lang;
    }
}

$gatto = new Movie('Il gatto con gli stivali', 2023, 'lorem', 'it', ['Cartone animato', 'Fanatsy', 'Avventura']);
$rick = new Movie('Rick e Morty', 2022, 'lorem ipsum ciao', 'en', ['Cartone animato', 'Commedia']);

// echo $gatto->titolo . '<br>';
// echo $gatto->anno . '<br>';
// echo $gatto->trama . '<br>';
// echo $gatto->linguaOriginale . '<br>';
// echo $gatto->genere . '<br>';
// echo '<br>' . '<br>';
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
            echo $gen, ' ';
        };
        echo '<br>';
    }
    echo '<br>';
}

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
            echo $gen, ' ';
        };
        echo '<br>';
    }
    echo '<br>';
}
