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
Descritivo: 51: Escreva um programa que leia as três notas obtidas por um aluno. Calcule e exiba a
média aritmética simples baseada apenas nas duas maiores notas obtidas.
******************************************************************************
*/
echo("Escreva a primeira nota ");
$nota1 = (float) readline();
echo("Escreva a segunda nota ");
$nota2 = (float) readline();
echo("Escreva a terceira nota ");
$nota3 = (float) readline();

$menor = $nota1;

if ($nota2 < $menor) {
    $menor = $nota2;
}

if ($nota3 < $menor) {
    $menor = $nota3;
}

$media = ($nota1 + $nota2 + $nota3 - $menor) / 2;

echo("A média aritimética das duas maiores notas é: " . $media);

/*
Este programa recebe três notas e calcula a média aritmética
considerando apenas as duas maiores notas.
*/

?>