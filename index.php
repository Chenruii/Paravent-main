<?php


// Les contraintes
//debut
$startMemory = memory_get_usage();
$start = microtime(true);

//exécution du code
$arry =range(1,1000000);

// fin
$end = microtime(true);
$endMemory = memory_get_usage();

// sortie
echo sprintf("Memoire utilisé est de %f kilo-octets<br>",($endMemory - $startMemory) /1024);
echo sprintf("temps écoulé est de %f Millisecondes", round($end-$start,3));