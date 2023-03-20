<?php 

    $arrayNumeros = [];

    for ($i = 0; $i < 5; $i++){
        while(true){
        $num = trim(readline("Digite um numero: "));
        if(is_numeric($num)){
            array_push($arrayNumeros, floatval($num));
            break;
        }else{
            echo "Digite apenas Números!";
        }
    }      
    }

    sort($arrayNumeros);
    echo "Maior número:" . $arrayNumeros[count($arrayNumeros)-1].PHP_EOL;
    echo "Menor número:" . $arrayNumeros[0].PHP_EOL;



    $maiorNumero = 0;
    $menorNumero = 0;


    for ($i = 0; $i < 5; $i++){
        while(true){
            $num = trim(readline("Digite um numero: "));
            if(is_numeric($num)){
                if($maiorNumero < $num){
                    $maiorNumero = $num;
                    break;
                }

                if($menorNumero > $num){
                    $menorNumero = $num;
                    break;
                }
                break;
            }else{
                echo "Digite apenas Números!";
            }
        }      
    }

    echo "Maior número: $maiorNumero"; 
    echo "Menor número: $menorNumero";


?>