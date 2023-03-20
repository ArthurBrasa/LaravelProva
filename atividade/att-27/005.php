<?php  
    
    function mediaNotas($arrNotas){
        return array_sum($arrNotas)/count($arrNotas);
    }

    function getNotas($rangeNotas){
        $arrNotas = [];
        $rangeNotas += 1;
        for ($i = 1; $i < $rangeNotas; $i++){
            while(true){
                $nota = floatval(trim(readline("Nota - $i: ")));
                if($nota > 10){
                    echo "Digite valores entre 1 e 10!".PHP_EOL;
                }else{
                    break;
                }
            }
            
            array_push($arrNotas, $nota);
        }

        return $arrNotas;
    }

    function verificaSexo($letter) {
        $sexo = strtoupper($letter);
        if($sexo === "M" || $sexo === "F"){
            return true;
        }
        return false;
    }


    function situaçãoFinal($mediaNotas){      
        if($mediaNotas>=6){
            return "Aprovado".PHP_EOL;
        }else{
            return "Reprovado".PHP_EOL;
        }

    }
   
    while(true){
        $sexo = substr(trim(readline("Escreva Seu sexo (M|F): ")), 0, 1);
        $sexo = strtoupper($sexo);
        if(verificaSexo($sexo)){
            $mediaNotas = mediaNotas(getNotas(4));
            $status = situaçãoFinal($mediaNotas);
            echo "Média: ". number_format($mediaNotas, 2, ",", ".").PHP_EOL;
            switch ($sexo) {
                case 'M':
                    echo "Caro aluno, seu resultado é: $status";
                    break;
                    
                case "F":
                    echo "Cara aluna, seu resultado é: $status";         
                    break;       

                default:
                    echo "Erro 0x092";
                    break;
            }
            

            break;
        }else{
            echo "Sexo inválido".PHP_EOL;
        }

    }
?>