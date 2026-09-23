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
Descritivo: Este programa lê um número inteiro positivo e exibe o dobro.
Caso o número seja negativo, informa uma mensagem de erro.
*****************************************************************************
*/

<?php

$numero = intval(readline("Digite um número inteiro: "));

if ($numero < 0) {
    echo "Erro: o número deve ser positivo.";
} else {
    $dobro = $numero * 2;
    echo "Dobro: " . $dobro;
}

?>