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
     echo "Digite seu CPF: ";
    $cpf = readLine();
    echo "Digite seu nome: ";
    $nome = readLine();
    echo "Qual seu rendimento Anual? : ";
    $rendimento_anual = (float) readLine();
    echo "Qual e o valor do seu imposto retido na fonte? : ";
    $imposto_retido = (float) readLine();
    echo "Qual e a sua contribuição previdenciaria? : ";
    $contribuicao_previdenciaria = (float) readLine();
    echo "Quanto e suas despesas médicas? : ";
    $despesas_medicas = (float) readLine();
    echo "Qual e o numero de dependentes que voce tem? : ";
    $numero_dependentes = (int) readLine();

    $aliquota = (float) readLine();
    $imposto_devido = (float) readLine();

    $desconto_dependentes = $numero_dependentes * 1.080;
    echo "O desconto de dependentes e: " . $desconto_dependentes . "\n";

    $total_deducoes =  + $contribuicao_previdenciaria + $despesas_medicas + $desconto_dependentes;
    echo "O total de deduções e: " . $total_deducoes . "\n";

    $base_calculo = $rendimento_anual - $total_deducoes;
    echo "A base de calculo e: " . $base_calculo . "\n";

    if($base_calculo >= 10.800 ){
        $imposto_devido = $base_calculo * $aliquota(0.00);
        echo "O imposto devido e: " . $imposto_devido . "Isento de imposto". "\n";
    }else if($base_calculo >= 10.800 && $base_calculo <= 21.600){
        $imposto_devido = $base_calculo * $aliquota(0.15);
        echo "O imposto devido e: " . $imposto_devido . "\n";
    }else if($base_calculo >= 21.600 ){
        $imposto_devido = $base_calculo * $aliquota(0.25);
        echo "O imposto devido e: " . $imposto_devido . "\n";
    }elseif($imposto_devido > $imposto_retido){
        $imposto_a_restituir = $imposto_devido - $imposto_retido;
        echo "O imposto e positivo, a imposto a pagar: " . $imposto_a_restituir . "\n";
    }else if($imposto_devido < $imposto_retido){
        $imposto_a_restituir = $imposto_retido - $imposto_devido;
        echo "O imposto e negativo, a imposto a restituir: " . $imposto_a_restituir . "\n";

    }
?>