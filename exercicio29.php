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
Descritivo: 29: Escreva um programa que leia um número real e, se for positivo, exiba seu inverso (1/x);
caso contrário, exiba o seu valor absoluto (número multiplicado por -1).
**************************
*/

$resultado = "";
if (isset($_POST["numero"])) {
    $numero = (float) $_POST["numero"];

    if ($numero > 0) {
        $resultado = "Inverso = " . (1 / $numero);
    } else {
        $resultado = "Valor absoluto = " . ($numero * -1);
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
Se o número for positivo, o programa calcula seu inverso (1/x).
Caso contrário, calcula seu valor absoluto multiplicando por -1.
*/
?>