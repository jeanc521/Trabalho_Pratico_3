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
Descritivo: 56: Escreva um programa que leia o tipo de um veículo ('A', 'B', 'C', 'D' ou 'E') e a distância em
Km que ele deseja percorrer. Baseando-se na tabela abaixo de consumo, calcule e exiba o
total de litros de combustível estimados para o trajeto:
- Tipo A: 13.5 Km/l | Tipo B: 12.0 Km/l
- Tipo C: 10.5 Km/l | Tipo D: 9.0 Km/l
- Tipo E: 7.5 Km/
******************************************************************************
*/

echo("Digite o tipo do veículo (A, B, C, D ou E): ");
$tipo = strtoupper(readline());

echo("Digite a distância em Km: ");
$distancia = (float) readline();

switch ($tipo) {
    case "A":
        $consumo = 13.5;
        break;

    case "B":
        $consumo = 12.0;
        break;

    case "C":
        $consumo = 10.5;
        break;

    case "D":
        $consumo = 9.0;
        break;

    case "E":
        $consumo = 7.5;
        break;

    default:
        echo("Tipo de veículo inválido!");
        exit;
}

$litros = $distancia / $consumo;

echo("Litros estimados: " . $litros . " litros");

/*
Este programa recebe o tipo do veículo e a distância do trajeto
para estimar a quantidade de combustível necessária.
*/

?>