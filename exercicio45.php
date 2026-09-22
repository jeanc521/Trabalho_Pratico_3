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
Descritivo: Exercício 36: Escreva um programa que realiza operações de soma, subtração, divisão ou multiplicação conforme a opção escolhida..
******************************************************************************
*/


?>

<?php
 
echo "digite";
$n1 = (float) readline();

 $opcao = 0;
 echo "Escolha qual metodo de operação voce deseja fazer" . "\n";
 echo "1, Opção soma de numeros" . "\n";
 echo "2, opççao de subtração de numeros" . "\n";
 echo "3, opçaõ de divisao de numeros" . "\n";
 echo "4, opção de multiplicação de numeros" . "\n";
 echo "Digite uma das opções acima: ";
 $opcao = (int) readLine();



  switch ($opcao){
    case 1:
        echo"Voce esta somando!" . "\n";
        echo "Digite um numero: ";
        $num1 = (float) readLine();
        echo "Digite o segundo numero: ";
        $num2 = (float) readLine();

        $soma_mais =  $num1 + $num2 ;
        echo "O resultado da sua operação e: " . $soma_mais;
        break;
    case 2: 
        echo "Voce esta subtraindo!" . "\n";

        echo "Digite o primeiro numero: ";
        $n1 = (float)  readLine();
        echo "Digite o segundo nummero: ";
        $n2 = (float) readline();

        $soma = $n1 - $n2;
        echo "O resultado da sua opreção e: " . $soma;
        break;
    case 3:
        echo "Voce esta dividindo!" . "\n";

         echo "Digite o primeiro numero: ";
        $n1 = (float)  readLine();
        echo "Digite o segundo nummero: ";
        $n2 = (float) readline();

        $soma = $n1 / $n2;
        echo "O resultado da sua opreção e: " . $soma;
        break;
    case 4:
         echo "Voce esta multiplicando!" . "\n";

         echo "Digite o primeiro numero: ";
        $n1 = (float)  readLine();
        echo "Digite o segundo nummero: ";
        $n2 = (float) readline();

        $soma = $n1 * $n2;
        echo "O resultado da sua opreção e: " . $soma;
        break;

    default: 
    echo "Voce nao digitou nenhuma das opções, tente novamente!";
    break;
  }

  
?> 