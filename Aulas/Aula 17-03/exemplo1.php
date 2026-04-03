<?php
    $mapa1 = array('João', 'Maria', 3);
    print_r($mapa1); //posição
    var_dump($mapa1); //tipo de dados da posição

    echo "<p>Valor da posição 2 $mapa1[2] </p>";

    $mapa2[1] = "Aisla";
    $mapa2[2] = "Cleiton";
    $mapa2[3] = "Clara";
    print_r($mapa2);

    $contatos["Aisla"] = '159753';
    $contatos["Cleiton"] = "753159";
    print_r($contatos);

    foreach($contatos as $valor){
        echo "<p>Telefone $valor </p>";
    }

    foreach($contatos as $chave => $valor){
        echo "<p>Telefone de $chave: $valor </p>";
    }
    
    //apagar psoição
    unset($mapa1[3]);
    print_r($mapa1);

    // funções

    $qtd = count($mapa1); //qtd de elementos 

    asort($contatos);