<?php
//Scrivere un programma che trovi il maggiore tra 3 numeri

$numeri = [6,0,8];

if ($numeri[0] <= $numeri[1] && $numeri[1] >= $numeri[2]){
    echo "il numero più grande è {$numeri[1]}";
}
elseif ($numeri[0] >= $numeri[1] && $numeri[0] >= $numeri[2])
{
    echo "il numero più grande è {$numeri[0]}";
}
else
{
    echo "il numero più grande è {$numeri[2]}";
}