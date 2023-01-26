<?php

trait Anno{
    public $anno;
    
    //obiettivo: due fasi diverse stesso metodo attivate da due istanze totalmente diverse
    // metodo associato al trait
    public function getStringCustom(){
        if( get_class($this) == 'Libro'){
            echo "il libro this->nome è stato scritto nel $this->anno";
        } else if (get_class($this) == 'Employee') {
            echo "L'impiegato $this->nome è stato assunto nel: $this->anno";
        }
    }
}

?>
