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
Descritivo: Exercício 36: Escreva um programa que Identifica a naturalidade de acordo com a sigla do estado informado.
******************************************************************************
*/


?>

<?php

echo "Digite a sigla do estado onde você nasceu: ";
$estado = strtoupper(readline());

switch ($estado) {
    case "RJ":
        echo "Você é carioca!";
        break;

    case "SP":
        echo "Você é paulista!";
        break;

    case "MG":
        echo "Você é mineiro!";
        break;

    default:
        echo "Você é de outro estado!";
        break;
}

?>