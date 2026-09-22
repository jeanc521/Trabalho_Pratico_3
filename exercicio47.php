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
Descritivo: Exercício 36: Escreva um programa que lê dois nomes e os exibe em ordem alfabética..
******************************************************************************
*/


?>

<?php

echo "Digite o primeiro nome: ";
$primeiro_nome = readline();

echo "Digite o segundo nome: ";
$segundo_nome = readline();

if (strcasecmp($primeiro_nome, $segundo_nome) < 0) {
    echo $primeiro_nome . "\n";
    echo $segundo_nome;
} else {
    echo $segundo_nome . "\n";
    echo $primeiro_nome;
}

?>