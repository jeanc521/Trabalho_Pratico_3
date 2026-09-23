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
Descritivo: Este programa lê a base e a altura de um triângulo e calcula
e exibe sua área utilizando a fórmula (Base * Altura) / 2.
*****************************************************************************
*/

<?php

$base = floatval(readline("Digite a base do triângulo: "));
$altura = floatval(readline("Digite a altura do triângulo: "));

$area = ($base * $altura) / 2;

echo "Área do triângulo: " . $area;

?>