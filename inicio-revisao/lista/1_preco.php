
<?php 
// Criando variáveis com nomes descritivos 
$preco = 50; 
$quantidade = 9; 

// Calculando o valor total inicial 
$totalCompra = $preco * $quantidade; 


echo "O valor total da compra é: R$ " . $totalCompra . "<br>"; 

// Estrutura de decisão (SE) 
if ($totalCompra >= 200) { 
    // Se for maior ou igual a 200, calcula 10% de desconto 
    $desconto = $totalCompra * 0.10; 
    $valorFinal = $totalCompra - $desconto; 
  
    echo "O valor total com desconto (10%) é: R$ " . $valorFinal . "<br>"; 
} else { 
    // Se for menor que 200, não tem desconto 
   
    echo "O valor total sem desconto é: R$ " . $totalCompra . "<br>"; 
} 
?>