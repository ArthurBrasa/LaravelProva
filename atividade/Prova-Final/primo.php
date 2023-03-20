<?php

    function primo($num, $divisor=2){
        if($num == 1 || $num == 2 || $num == 3){
            return true;
        }
        if($num == $divisor){
            return true;
        }elseif ($num % $divisor == 0){
            return false;
        }
        return primo($num, $divisor+1);
        
        
        
        
    }

    $num = readline("Digite um número: ");
    if(primo($num)){
        echo "O número eh PRIMO";
    }else{
        echo "O número NÃO É PRIMO";
    }

?>