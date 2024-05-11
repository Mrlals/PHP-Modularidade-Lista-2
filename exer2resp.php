<?php
    require_once "cabecalho.php";

    echo "<p>Resposta: ".menorPosicao($_POST['valor1'], $_POST['valor2'], $_POST['valor3'], $_POST['valor4'], $_POST['valor5'], $_POST['valor6'], $_POST['valor7'])."</p>";

    require_once "rodape.php";
?>

