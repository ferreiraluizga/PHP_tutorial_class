<?php

//exemplo de criação de variáveis
$n1 = 10;
$n2 = 2;
$texto = "Mensagem de Texto";

//exemplo de exibição de variáveis
echo $texto . "<br>";
echo $n1 + $n2 . "<br>";

//exemplos de operações com variáveis
echo "$n1 + $n2 = " . $n1 + $n2 . "<br>";
echo "$n1 - $n2 = " . $n1 - $n2 . "<br>";
echo "$n1 * $n2 = " . $n1 * $n2 . "<br>";
echo "$n1 / $n2 = " . $n1 / $n2 . "<br>";

//exemplo de decisão
if ($n1 <= 10) {
    echo "O número é menor ou igual a 10 <br>";
} else {
    echo "O número é maior que 10 <br>";
}

//estrutura de repetição
echo "<br> Estrutura de Repetição <br>";
for($n1 = 0; $n1 <= 10; $n1++){
    echo $n1 . "<br>";
}

echo "<br>";

/*
TABUADA DO 2 - EXEMPLO

echo "Tabuada do 2 <br>";
for($i = 0; $i <= 10; $i++){
    echo 2 * $i . "<br>";
}
echo "<br>";
*/

//tabuada completa
for($i = 1; $i <= 10; $i++){
    echo "Tabuada do " . $i . "<br>";
    for($j = 0; $j <= 10; $j++){
        echo "$i * $j = " . $i * $j . "<br>";
    }
    echo "<br>";
}

?>