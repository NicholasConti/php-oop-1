<?php
//classe per i film
class Movie
{
    public $titolo;
    public $anno;
    public $trama;
    public $linguaOriginale;
    public $genere;

    /**
     * __construct
     *
     * @param  mixed $_title
     * @param  mixed $_year
     * @param  mixed $_story
     * @param  mixed $_ogLang
     * @param  mixed $_gen
     * @return void
     */
    public function __construct($_title, int $_year, $_story, $_ogLang, array $_gen)
    {
        $this->titolo = $_title;
        $this->anno = $_year;
        $this->trama = $_story;
        $this->changeLanguage($_ogLang);
        $this->genere = $_gen;
    }

    //funzione che cambia una sigla che indica una lingua in una stringa completa che indica la lingua    
    /**
     * changeLanguage
     *
     * @param  mixed $lang
     * @return void
     */
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
