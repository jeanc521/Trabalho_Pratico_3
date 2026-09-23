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
Descritivo:60: Escreva um programa conceitual que leia a quantidade de habitantes de uma cidade de
forma que o programa se prepare para ler a idade de cada morador e calcular a média.
******************************************************************************
*/

echo("Digite a quantidade de habitantes: ");
$habitantes = (int) readline();

$soma = 0;

for ($i = 1; $i <= $habitantes; $i++) {
    echo("Digite a idade do habitante $i: ");
    $idade = (int) readline();

    $soma = $soma + $idade;
}

$media = $soma / $habitantes;

echo("A média das idades é: " . $media);

/*
Este programa recebe a quantidade de habitantes, calcula a média
das idades informadas e apresenta o resultado.
*/

?>