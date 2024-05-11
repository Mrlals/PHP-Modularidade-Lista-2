<?php

    require_once "cabecalho.php";

    if($_POST['valor']){
        echo "<div class='container'>" . idade() . "</div>";
    } else {
        echo "<p>Preencha o ano de nascimento.</p>";
    }
    
    require_once "rodape.php";

?>