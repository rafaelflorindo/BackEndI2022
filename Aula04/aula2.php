<?php
    $valor1 = 15;//variável inteiro
    $valor_2 = 25.89;//variavel float

    echo "Valor 1 = $valor1";

    $soma = $valor_2 + 2;
    echo "<hr>Valor 1 = $soma";
?>    
<?=$valor_2;?>
<?php
    $nome = "Rafael";//variavel string
    echo "<br>Nome = " . $nome;//concatenação
?>
<?php
//estrutura de condição simples e composta
$idade = 14;

if ($idade > 15)
{
    echo "Maior de 15 anos";
}else
{
    echo "Menor ou igual de 15 anos";
}
echo "<hr>";
//estrutura de condição if/elseif/else
if ($idade > 15)
{
    echo "Maior de 15 anos";
}elseif($idade < 15)
{
    echo "Menor de 15 anos";
}else{
    echo "Igual 15 anos";
}
?>