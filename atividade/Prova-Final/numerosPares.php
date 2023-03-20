<?php 

    $array = [];

    for ($i=1; $i <= 20 ; $i++) { 
        if($i%2==0){
            array_push($array, $i);
        }
    }

    print_r($array);


?>