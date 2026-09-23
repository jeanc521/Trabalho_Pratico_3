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
Descritivo: Este programa lê o nome de um aluno e suas duas notas,
calcula a média aritmética simples e exibe o nome do aluno e sua média final.
*****************************************************************************
*/

<?php

$nome = readline("Digite o nome do aluno: ");
$av1 = floatval(readline("Digite a nota da AV1: "));
$av2 = floatval(readline("Digite a nota da AV2: "));

$media = ($av1 + $av2) / 2;

echo "Aluno: " . $nome . "\n";
echo "Média final: " . $media;

?>