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
Descritivo: Exercício 36: Escreva um programa que leia o codigo de consumo e o preço do kWh e consumo da quantidade do kWh e os exiba na tela,
o codigo de consumo e o valor a ser pago pelo consumo de energia.
******************************************************************************
*/


?>

<?php
    echo "Digite seu codigo de consumo: ";
    $codigo_de_consumo  = (float) readLine();
    echo "Digite o preço do kWh: ";
    $kWh = (float) readLine();
    echo "Digite a quantidade de consumida de kWh: ";
    $quantidade_kWh = (float) readLine();


    if ($codigo_de_consumo == 11.20){
        $codigo_de_consumo = 11.20;
    }

    $calculo_energia = $kWh * $quantidade_kWh;
    echo "Voce tem que pagar: " . $calculo_energia . "\n" . "O codigo de consumo é: " . $codigo_de_consumo;


?> 