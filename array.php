<?php 

    $meuArray = array();

    $comidas = ["Cachorro-quente", "Hamburguer", "Coca-Cola", "Batata Frita", "Frango Frito", "Água" ];

    array_push($comidas, "Sorvete");
    array_pop($comidas);

    foreach($comidas as $i => $comida){
        echo $i . " - " . $comida.PHP_EOL;
    }


    $info = [
        "nome" => "Arthur",
        "sobrenome" => "Brasa",
        "idade" => 21,
        "solteiro" => true
    ];

    print_r($info);


    


    $arrayDinamico = range(0, 5);
    var_dump($arrayDinamico);


?>