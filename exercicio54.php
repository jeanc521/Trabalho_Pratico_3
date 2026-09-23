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
Descritivo: 54: Escreva um programa que leia um número inteiro entre 1 e 7 e mostre o dia da semana
correspondente (exemplo: 1 -> 'Domingo', 4 -> 'Quarta-feira', etc.).
******************************************************************************
*/
echo ("Digite seu número de 1 a 7:");
$numero = (int) readline();

switch ($numero) {
    case 1 :
        echo ("Domingo");
        break;

    case 2 :
        echo ("Segunda-Feira");
        break;

    case 3 :
        echo ("Terça-Feira");
        break;

    case 4 :
        echo ("Quarta-Feira");
        break;

    case 5 :
        echo ("Quinta-Feira");
        break;

    case 6 :
        echo ("Sexta-Feira");
        break;

    case 7 :
        echo ("Sabado");
        break;

    default :
        echo ("Número invalido!");
}

/*
Este programa recebe um número de 1 a 7 e informa o dia da
semana correspondente.
*/

?>