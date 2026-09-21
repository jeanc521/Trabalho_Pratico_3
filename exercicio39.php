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
Descritivo: Exercício 36: Escreva um programa que leia tres notas e faça a media aritmetica e exiba na tela,
Se a media for maior ou igual a 8.0, exiba "Conceito A", se for maior ou igual a 5.0 e menor que 8.0, exiba "Conceito B", caso contrário, exiba "Conceito C".
******************************************************************************
*/


?>

<?php

echo "Digite seu nome: ";
$nome = readLine();
echo "Digite o seu salario atua: ";
$salario_atual = (int) readLine(); // numero interiro nao pode colocar ponto nem virgula.

if($salario_atual >+ 0 && $salario_atual <= 1000 ){
 $reajuste = $salario_atual * 0.20;
 $novo_salario = $salario_atual + $reajuste;
 echo "$nome, seu salario vai ser reajustado para: " . $novo_salario;
}elseif($salario_atual >= 1000.01 && $salario_atual <= 5000){
    $reajuste = $salario_atual * 0.10;
    $novo_salario = $salario_atual + $reajuste;
    echo "$nome, seu salario vai ser reajustado para: " . $novo_salario;
}elseif($salario_atual >= 5000.0){
    $reajuste = $salario_atual * 0.00;
    $novo_salario = $salario_atual + $reajuste;
    echo "$nome, seu salario vai ser reajustado para: " . $novo_salario . "Voce ganha muito, nao vai ter reajuste";
}
  
?>