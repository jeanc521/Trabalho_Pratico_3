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
Descritivo: 50: Escreva um programa que leia cinco números e exiba na tela o maior e o menor valor
digitado.
******************************************************************************
*/

echo("Digite o primeiro numero:");
$n1 = (float) readline();
echo("Digite o segundo numero:");
$n2 = (float) readline();
echo("Digite o terceiro numero:");
$n3 = (float) readline();
echo("Digite o quarto numero:");
$n4 = (float) readline();
echo("Digite o quinto numero:");
$n5 = (float) readline();

$maior = $n1;

if ($n2 > $maior) {
    $maior = $n2;

}
if ($n3 > $maior) {
    $maior = $n3;

}
if ($n4 > $maior) {
    $maior = $n4;
}
if ($n5 > $maior) {
    $maior = $n5;
}
echo ("O maior numero é: $maior");

$menor = $n1;

if ($n2 < $menor) {
    $menor = $n2;

}
if ($n3 < $menor) {
    $menor = $n3;

}
if ($n4 < $menor) {
    $menor = $n4;
}
if ($n5 < $menor) {
    $menor = $n5;
}

echo ("\nO menor numero é: $menor");

/*O programa pede cinco números, depois mostra qual foi o maior 
e qual foi o menor número.
*/

?>