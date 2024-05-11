<?php

    require_once "cabecalho.php";

    $metragem = $_POST['valor'];

    $resultado = metragem($metragem);

    echo '<p>' . $resultado['quantidade'] . '</p>';
    echo '<p>' . $resultado['preco'] . '</p>';

    require_once "rodape.php";

?>