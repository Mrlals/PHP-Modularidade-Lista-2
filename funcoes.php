<?php

    function exibirData(){
        echo "Hoje é dia ".date("d");
    }

    function somar($n1, $n2){
        return $n1 + $n2;
    }

    function positivoNegativo($v){
        if($v > 0){
            return "Valor positivo!";
        } elseif($v < 0) {
            return "Valor Negativo!";
        } else {
            return "Igual a zero!";
        }
    }

    function menorPosicao($n1, $n2, $n3, $n4, $n5, $n6, $n7){
        $numeros = [$n1, $n2, $n3, $n4, $n5, $n6, $n7];
        
        $menorValor = $numeros[0];
        $posicaoMenor = 0;
        
        for ($i = 1; $i < count($numeros); $i++) {
            if ($numeros[$i] < $menorValor) {
                $menorValor = $numeros[$i];
                $posicaoMenor = $i;
            }
        }
        
        $resultado = "<p>O menor valor é: " . $menorValor . "</p>";
        $resultado .= "<p>A posição do menor valor é: " . ($posicaoMenor + 1) . "</p>";
    
        return $resultado;
    }

    function tabuada(){
        $valor = $_POST['valor'];

        echo "<p> Tabuada!!! do " .$valor."</p>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $valor * $i;
            echo "<p>" . $valor . " x " .$i. " = ".$resultado."</p>"; 
        }
        return $resultado;
    }

    function fatorial(){
        $valor = $_POST['valor'];
        $fatorial = 1;

        for ($i = $valor; $i > 1; $i--) {
            $fatorial *= $i;
        }

        return $fatorial;

    }

    function crescente($v1, $v2){
        if ($v1 > $v2) {
            $temp = $v1;
            $v1 = $v2;
            $v2 = $temp;
        }
    
        if ($v1 == $v2) {
            $resultado = "<p>Números iguais: " . $v1 . "</p>";
            return $resultado;
        } else {
            $resultado = "<p>Números em ordem crescente: " . $v1 . ", " . $v2 . "</p>";
            return $resultado;
        }
    }

    function conversor($v1){

        $cent = $v1 * 100;
    
        $resultado = "<p> O valor convertido em Centímetro é igual a: ". $cent." centímetros </p>";

        return $resultado;

    }

    function metragem($metragem){
        $ltos = $metragem / 3;
        $ltas = $ltos / 18;
        $precoTotal = $ltas * 80;
    
        $resultado = array(
            'quantidade' => "<p>Quantidade de latas de tinta necessárias: " . $ltas . "</p>",
            'preco' => "<p>Preço total: R$ " . $precoTotal . "</p>"
        );
    
        return $resultado;
    }

    function idade(){
        $anoNascimento = $_POST['valor'];
    
        define('ANO_ATUAL', date('Y'));
    
        $idade = ANO_ATUAL - $anoNascimento;
    
        $diasVividos = $idade * 365; // Assumindo que um ano tem 365 dias
    
        $idade2025 = 2025 - $anoNascimento;
    
        $resultado = "<p>Idade: " . $idade . " anos</p>";
        $resultado .= "<p>Dias vividos: " . $diasVividos . " dias</p>";
        $resultado .= "<p>Idade em 2025: " . $idade2025 . " anos</p>";
    
        return $resultado;
    }

    function IMC($peso, $altura){
        $imc = $peso / ($altura * $altura);

        $classificacao = "";
        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            $classificacao = "Peso normal";
        } elseif ($imc >= 25 && $imc < 30) {
            $classificacao = "Sobrepeso";
        } else {
            $classificacao = "Obesidade";
        }

        return array(
            'imc' => $imc,
            'classificacao' => $classificacao
        );
    }