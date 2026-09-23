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
Descritivo: 57: Escreva um programa que leia separadamente o dia, o mês e o ano de uma data e
informe se ela é uma data válida ou não. Considere a ocorrência de anos bissextos.
******************************************************************************
*/

echo ("Digite o dia:");
$dia = (int) readline();

echo ("Digite o mês:");
$mes = (int) readline();

echo ("Digite o ano:");
$ano = (int)  readline();

$valida = true;
 
if ($mes < 1 || $mes > 12) {
    $valida = false;
} elseif ($dia < 1) {
    $valida = false;
} elseif ($mes == 2) {

    if (($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0)) {
        if ($dia > 29) {
            $valida = false;
        }
    } else {
        if ($dia > 28) {
            $valida = false;
        }
    }

} elseif ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {

    if ($dia > 30) {
        $valida = false;
    }

} elseif ($dia > 31) {
    $valida = false;
}

if ($valida) {
    echo("Data válida!");
} else {
    echo("Data inválida!");
}

/*
Este programa recebe uma data e verifica se ela é válida,
considerando também os anos bissextos.
*/

?>