<?php
/*
***************************
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

Data: 23 de Setembro de 2026

Descritivo:
08: Leia um número inteiro e exiba seu antecessor e sucessor.
***************************
*/

$numero = (int) readline("Digite um número inteiro: ");

$antecessor = $numero - 1;
$sucessor = $numero + 1;

echo "Antecessor: $antecessor\n";
echo "Sucessor: $sucessor";

/*
Explicação:
O programa lê um número inteiro e calcula seu antecessor,
subtraindo 1, e seu sucessor, somando 1.
*/
?>
