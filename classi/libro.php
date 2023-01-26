<?php
include_once __DIR__ .'./prodotto.php';
include_once __DIR__ .'/../trait/anno.php';

class Libro extends prodotto{
    public $pagine;
    public $copertina;


    // trait: perchè non si può usare extends
    use Anno;

    public function __construct(
        String $nome,
        String $autore,
        Float $prezzo,
        Generi $generi,
        String $pubblicato,
        String $immagine,

        // è come se fosse un iclude dentro la classe
        Int $pagine,
        String $copertina
        // Int $anno
    ) {
        $this->pagine = $pagine;
        $this->copertina = $copertina;
        // $this->anno = $anno;


        parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine);
    }

    public function _setAnno($annoCreazione){
        $this->anno = $annoCreazione;
    }

}



?>