<?php

    require_once "cabecalho.php";

    $valor = $_POST['valor'];

    echo "<p>O fatorial de " . $valor . " é: " .fatorial(). "</p>";

    require_once "rodape.php";

?>