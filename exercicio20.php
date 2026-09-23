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
Descritivo: Este programa lê uma data no formato ddmmaa e reorganiza
a data para o formato mmddaa.
*****************************************************************************
*/

<?php

$data = readline("Digite a data no formato ddmmaa: ");

$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

echo "Data reorganizada: " . $mes . $dia . $ano;

?>