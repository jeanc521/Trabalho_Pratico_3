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
52: Escreva um programa que leia um valor em Reais (BRL), a taxa de cotação atual do dólar
(USD) e converta o valor para dólares, exibindo o resultado formatado.
******************************************************************************
*/
echo ("Digite o valor em Reais R$");
$reais = (float)  readline();

echo ("Digite a cotação atual do Dólar:");
$cotacao = (float)  readline();

$dolares = $reais / $cotacao;

echo("Valor em dólares: US$ " . number_format($dolares, 2, '.', ','));

/*
Este programa recebe um valor em reais e a cotação do dólar
para calcular o valor correspondente em dólares.
*/

?>