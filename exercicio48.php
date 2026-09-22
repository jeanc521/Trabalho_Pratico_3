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
Descritivo: Exercício 36: Escreva um programa que lê três números e exibe o maior deles.
******************************************************************************
*/


?>

<?php

echo "Digite o primeiro número: ";
$num1 = (float) readline();

echo "Digite o segundo número: ";
$num2 = (float) readline();

echo "Digite o terceiro número: ";
$num3 = (float) readline();

$maior = $num1;

if ($num2 > $maior) {
    $maior = $num2;
}

if ($num3 > $maior) {
    $maior = $num3;
}

echo "O maior número é: " . $maior;

?>