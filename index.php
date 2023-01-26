<?php


include_once __DIR__ .'./classi/generi.php';
include_once __DIR__ .'./classi/audiolibro.php';
include_once __DIR__ .'./classi/libro.php';
include_once __DIR__ .'./classi/impiegato.php';
include_once __DIR__ .'/./trait/anno.php';

$generi =[
    'giallo' => new Generi('giallo', '<i class="fa-brands fa-searchengin"></i>'),
    'horror' => new Generi('horror', '<i class="fa-brands fa-optin-monster"></i>')
];
var_dump($generi);

$prodotti =[
    new Libro('Favola per rinnegati','Alessandro Bongiorni', 20, $generi['giallo'], true, 'https://picsum.photos/200',  300, 'flessibile'),

    new AudioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
];

var_dump($prodotti);

// foreach($prodotti as$elem){
//     echo get_class($elem);
//     echo "<br>";
// }

// $prodotti[0] -> getStringCustom();

$impiegato = new Impiegato('Mattia', 'Bianchi', 3);
var_dump($impiegato);
$impiegato->anno = 1998;
$impiegato->getStringCustom();
var_dump($impiegato);





// $impietgato->getStringCustom();


?>