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
Descritivo: Este programa lê dois números inteiros e calcula a média
aritmética simples entre eles.
*****************************************************************************
*/

<?php

$num1 = intval(readline("Digite o primeiro número: "));
$num2 = intval(readline("Digite o segundo número: "));

$media = ($num1 + $num2) / 2;

echo "A média aritmética é: " . $media;

?>