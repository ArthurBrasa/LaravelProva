<?php 
    $tentativas = 0;
    while(true){
        $entrada = readline("Digite um numero: ");

        if($entrada == "5"){
            echo "Vitória!".PHP_EOL;
            echo "Números de tentativas: $tentativas".PHP_EOL;
            break;
        }else{
            echo "Tente outra vez!".PHP_EOL;
            $tentativas += 1;
        }


    }

    $range = 0;
    while($range<10){
        $string = str_repeat("-", $range);
        echo $string.PHP_EOL;
        $range += 1;
    }
    while($range>0){
        $string = str_repeat("-", $range);
        echo $string.PHP_EOL;
        $range -= 1;
    }

?>