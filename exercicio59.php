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
Descritivo: 59: Escreva um programa que leia o ano de nascimento de um nadador e o ano atual, calcule
a sua idade e classifique-o em uma categoria de acordo com a seguinte tabela:
- 0 a 4 anos: Não aceito
- 5 a 7 anos: Infantil A
- 8 a 10 anos: Infantil B
- 11 a 13 anos: Juvenil A
- 14 a 17 anos: Juvenil B
- Maiores de 17 anos: Sênior
******************************************************************************
*/

echo("Digite o ano de nascimento: ");
$anoNascimento = (int) readline();

echo("Digite o ano atual: ");
$anoAtual = (int) readline();

$idade = $anoAtual - $anoNascimento;

echo("Idade: " . $idade . " anos\n");

if ($idade <= 4) {
    echo("Categoria: Não aceito");
} elseif ($idade <= 7) {
    echo("Categoria: Infantil A");
} elseif ($idade <= 10) {
    echo("Categoria: Infantil B");
} elseif ($idade <= 13) {
    echo("Categoria: Juvenil A");
} elseif ($idade <= 17) {
    echo("Categoria: Juvenil B");
} else {
    echo("Categoria: Sênior");
}

/*
Este programa calcula a idade do nadador e informa sua categoria
de acordo com a faixa etária.
*/

?>