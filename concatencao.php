<?php 

    $nome = "Marcos";

    echo "Meu nome eh $nome.\n";

    echo "Bem-Vindo " . $nome . "\n";

    // 
    $html = "www.google.com/";

    $path = ["homeWork", "pagina-3", "pagina-1", "adm", "user", "index"];

    for ( $i =  0 ; $i < count($path); $i++ ){
        $path_hacker = $html . $path[$i];
        echo $path_hacker . "\n";
    }


    // $password = "7110eda4d09e062aa5e4a390b0a572ac0d2c0220";
    // echo sha1($password).PHP_EOL;

    // if (sha1(readline("senha:  ")) == $password){
    //     echo "Bem- Vindo";
    // }

?>