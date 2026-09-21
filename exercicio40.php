<?php
/*
*****************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2A

Componentes:
 26013478-2 - Davi Ferreira da Costa
 26008617-2 - Fernando Cesar Cravo
 26008668-2 - Gabriel Eduardo Consorte
 26010149-2 - Jean Carlos 
 26007982-2 - João Gabriel Subtil 
Data: 19 de Setembro de 2026
Descritivo: Exercício 36: Escreva um programa que leia tres notas e faça a media aritmetica e exiba na tela,
Se a media for maior ou igual a 8.0, exiba "Conceito A", se for maior ou igual a 5.0 e menor que 8.0, exiba "Conceito B", caso contrário, exiba "Conceito C".
******************************************************************************
*/


?>

<?php

echo "Quantos dias voce passou no hotel?: ";
$dias = (int) readLine();
echo "Qual apartamento voce ficou?: ";
$apartamento = readLine();
echo "Qual o valor de consumo que voce teve nesses dias?: ";
$consumo_interno = (float) readLine();

if($apartamento == "A"){
    
    $valor_diaria = $dias * 150;
    echo "O valor da sua diaria é de R$:  " . $valor_diaria;
}elseif($apartamento == "B"){
    echo "O valor da diaria do apartamento B é de R$ 100,00";
    $valor_diaria = $dias * 100;
    echo "O valor da sua diaria é de R$:  " . $valor_diaria;
}elseif($apartamento == "C"){
    echo "O valor da diaria do apartamento C é de R$ 75,00";
    $valor_diaria = $dias * 75;
    echo "O valor da sua diaria é de R$:  " . $valor_diaria;
}elseif($apartamento == "D"){
    echo "O valor da diaria do apartamento D é de R$ 50,00";
    $valor_diaria = $dias * 50;
    echo "O valor da sua diaria é de R$:  " . $valor_diaria;

}

$subtotal = $valor_diaria + $consumo_interno;
$taxa_servico = $subtotal * 0.10;
$valor_total = $subtotal + $taxa_servico;


echo "O valor da taxa de serviço é de R$: " . $taxa_servico . "\n";
echo "O valor do subtotal é de R$: " . $subtotal . "\n";
echo "O valor do consumo interno é de R$: " . $consumo_interno . "\n";
echo "A sua conta total do Hotel é de R$: " . $valor_total;

?>