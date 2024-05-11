<?php

    require_once "cabecalho.php";

    $valor1 = $_POST['valor1'];

    echo "<p>" .conversor($valor1). "</p>";

    require_once "rodape.php";

?>