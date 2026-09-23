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
Descritivo: 28: Escreva um programa que leia um número real e, se ele for maior do que 20, exiba a
metade deste número.
**************************
*/

$resultado = "";
if (isset($_POST["numero"])) {
    $numero = (float) $_POST["numero"];

    if ($numero > 20) {
        $resultado = "Metade = " . ($numero / 2);
    } else {
        $resultado = "O número não é maior que 20.";
    }
}
?>
<form method="post">
    <label>Digite um número real:</label>
    <input type="number" step="any" name="numero" required>
    <button type="submit">Calcular</button>
</form>

<?php
echo $resultado;
/*
Comentário:
O programa verifica se o número é maior que 20. Se for, calcula
e exibe a metade desse número.
*/
?>