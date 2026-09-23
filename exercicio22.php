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
Descritivo: Este programa lê o saldo de uma aplicação bancária e calcula
o novo saldo após um acréscimo de 2%.
*****************************************************************************
*/

<?php

$saldo = floatval(readline("Digite o saldo da aplicação: "));

$novoSaldo = $saldo + ($saldo * 2 / 100);

echo "Novo saldo: " . $novoSaldo;

?>