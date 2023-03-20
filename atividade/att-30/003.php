<?php 

    function arithmeticAverage($arrvalue){
        return array_sum($arrvalue)/count($arrvalue);
    }

    $arrValue = [];
    for ($i=1; $i <= 4; $i++) { 
        
        while(true){
            echo "Digite a nota - $i : ";
            $value = readline();
            if(is_numeric($value)){
                array_push($arrValue, $value);
                break;
            }else{
                echo "Digite apenas números!";
            }
        }
        
    }


    echo "Sua média ficou: ".number_format(arithmeticAverage($arrValue), 2);


?>