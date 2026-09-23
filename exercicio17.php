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
Descritivo: Este programa lê o dividendo e o divisor e exibe o dividendo,
o divisor, o quociente inteiro e o resto da divisão.
*****************************************************************************
*/

<?php

$dividendo = intval(readline("Digite o dividendo: "));
$divisor = intval(readline("Digite o divisor: "));

$quociente = $dividendo / $divisor;
$resto = $dividendo % $divisor;

echo "Dividendo: " . $dividendo . "\n";
echo "Divisor: " . $divisor . "\n";
echo "Quociente: " . intval($quociente) . "\n";
echo "Resto: " . $resto;

?>