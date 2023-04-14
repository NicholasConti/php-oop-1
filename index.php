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
var_dump($gatto);
var_dump($rick);
