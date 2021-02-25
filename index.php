<?php


// Les contraintes
//debut

list($startMemory,$start) = array(memory_get_usage(),microtime(true));


//exécution du code


// sortie
list($endMemory,$end) =array(memory_get_usage(),microtime(true));
$string = sprintf("Memoire utilisé est de %f kilo-octets,temps écoulé est de %.3 Millisecondes",($endMemory - $startMemory) / 1024 /1024, $end -$start);