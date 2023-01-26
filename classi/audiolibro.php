<?php

include_once __DIR__ .'/prodotto.php';

class AudioLibro extends prodotto{
    public $durata;
    public $piattaforma;
    public $link;

    public function __construct(
        String $nome,
        String $autore,
        Float $prezzo,
        Generi $generi,
        String $pubblicato,
        String $immagine,


        Int $durata,
        String $piattaforma,
        String $link
    ) {
        $this->durata = $durata;
        $this->piattaforma  = $piattaforma;
        $this->link = $link;
        parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine);
    }
    
}

?>