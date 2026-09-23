<?php
/*
***************************
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
Descritivo: 49: Escreva um programa que leia três números e os exiba na tela em ordem crescente e,
posteriormente, em ordem decrescente
**************************
*/

$resultado = "";
if (isset($_POST["numero"])) {
    $numero = (int) $_POST["numero"];

    if ($numero % 3 == 0) {
        $resultado = "O número é divisível por 3.";
    } else {
        $resultado = "O número não é divisível por 3.";
    }
}
?>
<form method="post">
    <label>Digite um número inteiro:</label>
    <input type="number" name="numero" required>
    <button type="submit">Verificar</button>
</form>

<?php
echo $resultado;
/*
Comentário:
O programa usa o operador % para verificar se o resto da divisão
do número por 3 é igual a zero.
*/
?>