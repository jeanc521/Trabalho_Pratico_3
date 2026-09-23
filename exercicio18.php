/*
*****************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2A
Componentes:
 26013478-2 - Davi Ferreira da Costa
 26008617-2 - Fernando Cesar Cravo
 26008668-2 - Gabriel Eduardo Consorte
 26010149-2 - Jean Carlos
 26007982-2 - João Gabriel Subtil
Data: 19 de Setembro de 2026
Descritivo: Este programa lê um número inteiro de três algarismos e exibe
o algarismo correspondente à casa das dezenas.
*****************************************************************************
*/

<?php

$numero = intval(readline("Digite um número de 3 algarismos: "));

$dezenas = intval($numero / 10) % 10;

echo "Algarismo das dezenas: " . $dezenas;

?>