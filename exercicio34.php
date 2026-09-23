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
if (isset($_POST["numero1"], $_POST["numero2"])) {
    $numero1 = (float) $_POST["numero1"];
    $numero2 = (float) $_POST["numero2"];

    if ($numero1 >= $numero2) {
        $resultado = "O maior número é: " . $numero1;
    } else {
        $resultado = "O maior número é: " . $numero2;
    }
}
?>
<form method="post">
    <label>Primeiro número:</label>
    <input type="number" step="any" name="numero1" required><br><br>

    <label>Segundo número:</label>
    <input type="number" step="any" name="numero2" required><br><br>

    <button type="submit">Verificar maior</button>
</form>

<?php
echo $resultado;
/*
Comentário:
O programa utiliza uma decisão composta if/else para comparar os
dois números e informar qual é o maior.
*/
?>