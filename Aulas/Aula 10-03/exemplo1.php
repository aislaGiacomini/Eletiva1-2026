<?php
    //Função de data e hora
    date_default_timezone_set('America/Sao_Paulo');
    $data = date("d/m/Y H:i:s");
    echo "<p>$data</p>";

    $valor = 5.8;
    $valorArredondado = round($valor); //arredondar para valor mais próximo 
    echo "Valor arredondado: $valorArredondado";

    $valorFormatado = number_format($valor, 2, ",","."); //formatar valor
    echo "<p>Valor formatado: $valorFormatado </p>";

    $exp = pow(3,4);// Exponenciação
    $raiz = sqrt(16); //Raiz Quadrada
    $aleatorio =rand(1, 100); //numero aleatório

    if(isset($nome)){ //verificar existencia
        echo "<p> Nome Informado!</p>";
    } else {
        echo "<p> Nome não informado </p>";
        die(); //A aplicação acaba
    }

    if(is_float($valor)){ //verificar tipo 
        echo "<p> É um numero flutuante</p>";
    } else {
        echo "<p> Não é um numero flutuante </p>";
    }
?>