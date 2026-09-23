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
Descritivo: 36: Deseja-se calcular a conta de consumo de energia elétrica de um consumidor. Escreva
um programa que leia o código do consumidor, o preço do kWh e a quantidade de kWh
consumida. Exiba o código do consumidor e o total a pagar, sabendo que a taxa mínima
cobrada é de R$ 11,20.
**************************
*/

$resultado = "";
if (isset($_POST["codigo"], $_POST["precoKwh"], $_POST["consumo"])) {
    $codigo = (int) $_POST["codigo"];
    $precoKwh = (float) $_POST["precoKwh"];
    $consumo = (float) $_POST["consumo"];

    $total = $precoKwh * $consumo;

    if ($total < 11.20) {
        $total = 11.20;
    }

    $totalFormatado = number_format($total, 2, ",", ".");
    $resultado = "Código do consumidor: $codigo<br>";
    $resultado .= "Total a pagar: R$ $totalFormatado";
}
?>
<form method="post">
    <label>Código do consumidor:</label>
    <input type="number" name="codigo" required><br><br>

    <label>Preço do kWh:</label>
    <input type="number" step="any" name="precoKwh" required><br><br>

    <label>Quantidade de kWh consumida:</label>
    <input type="number" step="any" name="consumo" required><br><br>

    <button type="submit">Calcular conta</button>
</form>

<?php
echo $resultado;
/*
Comentário:
O programa calcula o consumo multiplicando o preço do kWh pela
quantidade consumida. Se o valor for menor que R$ 11,20, aplica
o valor mínimo de cobrança e exibe o código e o total.
*/
?>