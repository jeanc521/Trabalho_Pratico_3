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
Descritivo: 53: Segundo uma tabela médica, o peso ideal de uma pessoa está relacionado com a altura e
o sexo. Escreva um programa que leia a altura e o sexo ('M' ou 'F') de uma pessoa, e calcule
e exiba o seu peso ideal utilizando as seguintes fórmulas:
- Para homens: (72.7 * H) – 58
- Para mulheres: (62.1 * H) – 44.7
******************************************************************************
*/

echo ("Digite seu Sexo (M) ou (F):");
$sexo = strtoupper(readline());

echo ("Digite sua altura:");
$altura = (float) readline();

if ($sexo == "M"){
    $peso_ideal = (72.7 * $altura) - 58;
} else {
    $peso_ideal = (62.1 * $altura) - 44.7;
}

echo ("Seu peso ideal é:" . $peso_ideal . "Kg");

/*
Este programa recebe a altura e o sexo da pessoa e calcula
seu peso ideal de acordo com a fórmula indicada.
*/

?>