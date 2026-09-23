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
Descritivo: 31: Escreva um programa que leia um número inteiro e exiba se ele é PAR ou ÍMPAR.
**************************
*/

$resultado = "";
if (isset($_POST["numero"])) {
    $numero = (int) $_POST["numero"];

    if ($numero % 2 == 0) {
        $resultado = "PAR";
    } else {
        $resultado = "ÍMPAR";
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
O programa verifica o resto da divisão por 2. Resto zero significa
que o número é par; caso contrário, ele é ímpar.
*/
?>