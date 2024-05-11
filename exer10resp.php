<?php

    require_once "cabecalho.php";

    // Converte os valores para float
    $peso = floatval($_POST['peso']);
    $altura = floatval($_POST['altura']);

    $classificacao = IMC($peso, $altura);

    echo "<p>Seu IMC é: " . $classificacao['imc'] . "</p>";
    echo "<p>Classificação: " . $classificacao['classificacao'] . "</p>";
    echo '<p>Para mais informações sobre o IMC e suas classificações, <a href="https://www.saude.gov.br/saude-de-a-z/indice-de-massa-corporal-imc">clique aqui</a>.</p>';

    require_once "rodape.php";

?>