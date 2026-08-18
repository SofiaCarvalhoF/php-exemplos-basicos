<?php
// Array (Linhas e colunas) com as notas
$matriz_notas = [
    [8.5, 9.5, 7.0, 6.0, 5.0]
];

$soma = 0;
$quantidade = 0;
$maior = $matriz_notas[0][0]; // Começa com a primeira nota da matriz
$menor = $matriz_notas[0][0];

// Exibindo os valores da matriz e fazendo os cálculos
foreach ($matriz_notas as $linha) {
    foreach ($linha as $nota) {
        echo $nota . " | ";
        
        $soma += $nota;
        $quantidade++;

        if ($nota > $maior) {
            $maior = $nota;
        }
        
        if ($nota < $menor) {
            $menor = $nota;
        }
    }
    echo "<br>";
}

// Cálculo da média
$media = $soma / $quantidade;

echo "<br>";
echo "Média da turma: " . $media . "<br>";
echo "Maior nota: " . $maior . "<br>";
echo "Menor nota: " . $menor . "<br>";
?>
 