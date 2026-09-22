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
Descritivo: Exercício 36: Escreva um programa que Calcula a idade a partir do ano de nascimento e verifica se o ano é válido..
******************************************************************************
*/

 // & "C:\xampp\php\php.exe" "C:\xampp\htdocs\tpratico\exercicio40.php"

?>

<?php
echo "Digite o seu ano de nascimento: ";
$ano_nascimento = (int) readLine();
$ano_atual = (int) date("Y");


if($ano_nascimento > 1900 && $ano_nascimento <= $ano_atual){
    $idade = $ano_atual - $ano_nascimento;
    echo "Sua idade é: ". $idade . "\n";
    echo "O seu ano de nascimento e valido";
}else{
    echo "O seu ano de nascimento e invalido";
}

?>

