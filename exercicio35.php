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
Descritivo: 35: Escreva um programa que leia dois números reais e os exiba primeiro em ordem
crescente e depois em ordem decrescente.
**************************
*/

$resultado = "";
if (isset($_POST["numero1"], $_POST["numero2"])) {
    $numero1 = (float) $_POST["numero1"];
    $numero2 = (float) $_POST["numero2"];

    if ($numero1 <= $numero2) {
        $resultado = "Ordem crescente: $numero1 e $numero2<br>";
        $resultado .= "Ordem decrescente: $numero2 e $numero1";
    } else {
        $resultado = "Ordem crescente: $numero2 e $numero1<br>";
        $resultado .= "Ordem decrescente: $numero1 e $numero2";
    }
}
?>
<form method="post">
    <label>Primeiro número:</label>
    <input type="number" step="any" name="numero1" required><br><br>

    <label>Segundo número:</label>
    <input type="number" step="any" name="numero2" required><br><br>

    <button type="submit">Ordenar</button>
</form>

<?php
echo $resultado;
/*
Comentário:
O programa compara os dois números e os exibe primeiro em ordem
crescente e depois em ordem decrescente.
*/
?>