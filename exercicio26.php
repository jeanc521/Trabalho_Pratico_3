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
Descritivo: 26: Escreva um programa que leia duas variáveis inteiras (A e B) e efetue a troca de conteúdo
entre elas de forma que A passe a valer B, e B passe a valer A. Exiba os valores antes e
depois da troca.
**************************
*/

$resultado = "";
if (isset($_POST["a"], $_POST["b"])) {
    $a = (int) $_POST["a"];
    $b = (int) $_POST["b"];

    $antesA = $a;
    $antesB = $b;

    $temp = $a;
    $a = $b;
    $b = $temp;

    $resultado = "Antes da troca:<br>A = $antesA<br>B = $antesB<br><br>";
    $resultado .= "Depois da troca:<br>A = $a<br>B = $b";
}
?>
<form method="post">
    <label>Valor de A:</label>
    <input type="number" name="a" required><br><br>

    <label>Valor de B:</label>
    <input type="number" name="b" required><br><br>

    <button type="submit">Trocar valores</button>
</form>

<?php
echo $resultado;
/*
Comentário:
O programa lê A e B, mostra os valores originais e usa uma variável
temporária para trocar os conteúdos das duas variáveis.
*/
?>