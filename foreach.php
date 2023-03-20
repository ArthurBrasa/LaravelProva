<?php 
    $arr = ["Madara", "Rudeos", "Rem", "Subaru", "Naruto", "Gaara"];
    
    foreach($arr as $nome){
        echo "$nome".PHP_EOL;
    }

    echo "-----------------------\n";

    $arrFrutas = ["Maça", "Banana", "Abacate", "Uva", "Mamão", "Laranja", "Kiwi"];
    foreach($arrFrutas as $i => $fruta){
        echo "$i - $fruta".PHP_EOL;
    }

?>