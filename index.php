<?php


// Les contraintes
//debut

list($startMemory,$start) = array(memory_get_usage(),microtime(true));


//exécution du code

$largeur= range(1,100000);
$altitude= [];

$max =0; // altitude max
$surface=0;  // surface unite abris

for ($i = 1; $i <= $largeur; $i++) {

    $largeur= 10;
    $altitude= [30, 27, 17, 42, 29, 12, 14, 41, 42, 42];

    // si altitude > altitude max
    if ($altitude[$i] >= $max) {
        $max = $altitude[$i];
    } else {
        $surface += 1;
    }
    print (" la surface est de : ".$surface. " pour un largeur d'altitude " .$altitude);
    //print ($surface);

}
// sortie
list($endMemory,$end) = array(memory_get_usage(),microtime(true));
$string = sprintf("Memoire utilisé est de %f kilo-octets,temps écoulé est de %.3 Millisecondes",($endMemory - $startMemory) / 1024 /1024, $end -$start);