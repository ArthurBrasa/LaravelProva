<?php 

    $view  = readline("path: ");

    if($view === "/"){
        echo "Você está no diretório raiz".PHP_EOL;
    }elseif ($view === "/home" ) {
        echo "Você esta na pasta \"home\"".PHP_EOL;
    }else{
        echo "Não foi possivel encontrar o diretório informada!".PHP_EOL;
    }


    if(10 > 5 && 5>100){
        echo "Ok".PHP_EOL;
    }else {
        echo "NOT ok!".PHP_EOL;
    }

    if(10 > 5 || 5>100){
        echo "Ok".PHP_EOL;
    }else {
        echo "NOT ok!".PHP_EOL;
    }


?>