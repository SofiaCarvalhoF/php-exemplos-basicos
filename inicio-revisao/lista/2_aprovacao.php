<?php

// Váriável
$media = 7;
$faltas = 10;

// Estrutura de decisão (SE)
if ($media >= 6.0 && $faltas <=15) {
   echo "Aprovado";
} elseif ($media >=5 && $faltas <=15) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}

?>