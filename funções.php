<?php 
    // 1
    function void(){
        echo "Hello World!";
    }

    // 2
    function parametros($n1, $n2){
        return $n1 + $n2;
    }

    // 2
    function multiplosParametos(...$array){
        print_r($array);
    }

    // 4
    function minhaFuncao($value, ...$array){
        print_r($array);
        echo $value;
    }

    // 5
    function funcaoComDefault($nome = "Kakashi Hatake"){
        echo "Ola $nome";
    }
    // funcão anônima
    $greet = function($name){
        echo "olá $name";
    };

    $mensagem = '-----------';
    // funcã o anônima
    $greet2 = function($name) use ($mensagem){
        echo "olá $name,  $mensagem";
    };

    $mensagem2 = '--========--';
    // funcão anônima
    $greet3 = function($name) use ($mensagem): string {
        return "olá $name";
    };

    $greet("world");


?>