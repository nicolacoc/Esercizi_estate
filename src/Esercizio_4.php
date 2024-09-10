<?php

//Creare uno script per sommare tutti gli interi tra 0 e 30 e infine mostrare il risultato

$max = 30;
$tot = 0;

for ($i = 1; $i <= $max; $i++){
    $tot += $i;
}

echo "Totale: {$tot}";