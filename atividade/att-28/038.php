<?php 
    // 38. Em uma competição de salto em distância cada atleta tem direito a cinco saltos. No final da série de saltos de cada atleta, o melhor e o pior resultados são eliminados. O seu resultado fica sendo a média dos três valores restantes. Você deve fazer um programa que receba o nome e as cinco distâncias alcançadas pelo atleta em seus saltos e depois informe a média dos saltos conforme a descrição acima informada (retirar o melhor e o pior salto e depois calcular a média). Faça uso de uma lista para armazenar os saltos. Os saltos são informados na ordem da execução, portanto não são ordenados. O programa deve ser encerrado quando não for informado o nome do atleta. A saída do programa deve ser conforme o exemplo abaixo:

    $getAltura = function($string): float{
        while(true){
            $num = trim(readline($string));
            if(is_numeric($num)){
                return $num;
            }else{
                echo "Digite apenas Números".PHP_EOL;
            }
        }
    };

    function mediaSaltos($arr){
        // removendo primeiro e ultimo elemento
        array_pop($arr);
        unset($arr[0]);

        // media
        return array_sum($arr)/count($arr);
        

    }


    $system = true;
    while($system){
        $input = trim(readline("Informe o nome do Atleta: "));
        if(strlen($input) > 0){
            $opcao = 1;
        }else{
            $opcao = 0;
        }
       
        switch ($opcao) {
            case 1:
                
                // Pegando valores dos saltos

                $arrSaltos = [];
                for ($i=1; $i <= 5; $i++) { 

                    $altura = $getAltura("Salto - ". $i . ": ");
                    array_push($arrSaltos, $altura);
                }

                // Ordenado array
                sort($arrSaltos);

                // 
                $media = mediaSaltos($arrSaltos);

                // output
                echo "Melhor Salto: ".$arrSaltos[4].PHP_EOL;
                echo "Pior Salto: ".$arrSaltos[0].PHP_EOL;
                echo "Média dos demais saltos: ". $media .PHP_EOL;
                echo "Resultado final:\n$input: $media".PHP_EOL;



                break;
            
            default:
                $system = false;
                break;
        }
    }



?>