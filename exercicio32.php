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
Descritivo: 32: Escreva um programa que leia um número real e informe se ele é positivo, negativo ou
nulo.
**************************
*/

$resultado = "";
if (isset($_POST["numero"])) {
    $numero = (float) $_POST["numero"];

    if ($numero > 0) {
        $resultado = "O número é POSITIVO.";
    } elseif ($numero < 0) {
        $resultado = "O número é NEGATIVO.";
    } else {
        $resultado = "O número é NULO.";
    }
}
?>
<form method="post">
    <label>Digite um número real:</label>
    <input type="number" step="any" name="numero" required>
    <button type="submit">Verificar</button>
</form>

<?php
echo $resultado;
/*
Comentário:
O programa verifica se o número é maior, menor ou igual a zero
e informa se ele é positivo, negativo ou nulo.
*/
?>