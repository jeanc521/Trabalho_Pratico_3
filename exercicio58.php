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
Descritivo: 58: Escreva um programa que leia uma letra do teclado e informe se ela é uma vogal
maiúscula, uma vogal minúscula ou uma consoante.
******************************************************************************
*/

echo("Digite uma letra: ");
$letra = readline();

if ($letra == "A" || $letra == "E" || $letra == "I" || $letra == "O" || $letra == "U") {
    echo("Vogal maiúscula");
} elseif ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {
    echo("Vogal minúscula");
} else {
    echo("Consoante");
}

/*
Este programa recebe uma letra e informa se ela é uma vogal
maiúscula, uma vogal minúscula ou uma consoante.
*/

?>