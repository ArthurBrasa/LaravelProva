<?php  
    
    function verificaSexo($value) {
        $sexo = strtoupper($value);
        switch ($sexo) {
            case 'M':
                return true;
                break;

            case "F":
                return true;
                break;
            
            default:
                return false;
                break;
        }
    }

    $sexo = substr(trim(readline("Escreva Seu sexo (M|F): ")), 0, 1);
    if(verificaSexo($sexo)){
        echo "Sexo Válido".PHP_EOL;
    }else{
        echo "Sexo inválido".PHP_EOL;
    }


?>