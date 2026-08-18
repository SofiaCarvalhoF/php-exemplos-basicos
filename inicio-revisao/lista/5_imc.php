<?php


function calcularIMC(float $peso, float $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}


$pesoTeste = 70;    
$alturaTeste = 1.75; 

// Chamada da função passando os valores de teste
$imcCalculado = calcularIMC($pesoTeste, $alturaTeste);

// Exibe o valor do IMC formatado com duas casas decimais
echo "Peso: " . $pesoTeste . " kg<br>";
echo "Altura: " . $alturaTeste . " m<br>";
echo "IMC Calculado: " . number_format($imcCalculado, 2, ',', '.') . "<br>";

// 3. Condicionais para exibir a classificação do IMC
if ($imcCalculado < 18.5) {
    echo "Classificação: Abaixo do peso";
} elseif ($imcCalculado >= 18.5 && $imcCalculado < 25) {
    echo "Classificação: Peso normal";
} elseif ($imcCalculado >= 25 && $imcCalculado < 30) {
    echo "Classificação: Sobrepeso";
} else {
    echo "Classificação: Obesidade";
}

?>