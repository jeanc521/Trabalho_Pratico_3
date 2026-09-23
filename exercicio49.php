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
Descritivo: 49: Escreva um programa que leia três números e os exiba na tela em ordem crescente e,
posteriormente, em ordem decrescente
******************************************************************************
*/

echo("Digite o primeiro numero:");
$n1 = (float) readline();
echo("Digite o segundo numero:");
$n2 = (float) readline();
echo("Digite o terceiro numero:");
$n3 = (float) readline();

if ($n1 > $n2) {
    $temp = $n1;
    $n1 = $n2;
    $n2 = $temp;
}
if ($n1 > $n3) {
    $temp = $n1;
    $n1 = $n3;
    $n3 = $temp;
}
if ($n2 > $n3) {
    $temp = $n2;
    $n2 = $n3;
    $n3 = $temp;
}

echo ("A ordem crescente dos numeros sao: $n1, $n2, $n3");
echo ("\nA ordem decrescente dos numeros sao: $n3, $n2, $n1");

/* O programa compara os números e troca de posição quando necessário,
deixando os valores organizados do menor para o maior.
*/ 

?>