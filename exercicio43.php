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
  echo "Digite um numero: ";
    $numero = (int) readLine(number_format($numero, 3));

    $centena =  intdiv($numero, 100);

    if($centena % 2 == 0){
        echo "centena e par";
    }else{
        echo "centena e impar";
    }
?>