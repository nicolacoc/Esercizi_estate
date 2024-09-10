<?php
//Creare uno script per stampare la riga 1-2-3-4-5-6-7-8-9-10 attraverso i loop.


$risultato = "";
$max = 10;

For ($n = 1; $n <= $max; $n++){

    $risultato .= $n;
    if ($n != $max){
        $risultato .= "-";
    }

}

echo $risultato;