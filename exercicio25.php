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
Descritivo: 25:  Escreva um programa que leia uma temperatura dada na escala Fahrenheit e exiba o
equivalente convertido em graus Celsius (Fórmula de conversão: C = 5/9 * (F – 32)).
**************************
*/

$resultado = "";
if (isset($_POST["fahrenheit"])) {
    $fahrenheit = (float) $_POST["fahrenheit"];
    $celsius = (5 / 9) * ($fahrenheit - 32);
    $resultado = "Temperatura em Celsius = " . $celsius;
}
?>
<form method="post">
    <label>Digite a temperatura em Fahrenheit:</label>
    <input type="number" step="any" name="fahrenheit" required>
    <button type="submit">Calcular</button>
</form>

<?php
echo $resultado;
/*
Comentário:
O programa recebe uma temperatura em Fahrenheit pelo formulário,
converte para Celsius usando a fórmula indicada e exibe o resultado.
*/
?>