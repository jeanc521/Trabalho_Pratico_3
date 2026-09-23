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
Descritivo: 55: Escreva um programa que leia um número inteiro entre 1 e 12 e exiba o nome do mês
correspondente por extenso.
******************************************************************************
*/
echo("Digite um número de 1 a 12: ");
$numero = (int) readline();

switch ($numero) {
    case 1:
        echo("Janeiro");
        break;

    case 2:
        echo("Fevereiro");
        break;

    case 3:
        echo("Março");
        break;

    case 4:
        echo("Abril");
        break;

    case 5:
        echo("Maio");
        break;

    case 6:
        echo("Junho");
        break;

    case 7:
        echo("Julho");
        break;

    case 8:
        echo("Agosto");
        break;

    case 9:
        echo("Setembro");
        break;

    case 10:
        echo("Outubro");
        break;

    case 11:
        echo("Novembro");
        break;

    case 12:
        echo("Dezembro");
        break;

    default:
        echo("Número inválido!");
}

/*
Este programa recebe um número de 1 a 12 e informa o mês
correspondente.
*/

?>