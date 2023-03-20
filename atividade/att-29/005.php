<?php 
    // 5. Crie um vetor que armazene o nome de todos os meses do ano.
    // Peça ao usuário que digite um número e ele informe qual o nome do
    // mês correspondente.


    $mesesAno = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    $mes = readline("Digite um mês: ");
    while(true){
        if(is_numeric($mes) && $mes > 0 && $mes < 13){
            break;
        }else{
            echo "Digite um mês Válido!".PHP_EOL;
            $mes = readline("Digite um mês: ");
        }
    }

    echo "Mês correspondente : ".$mesesAno[$mes-1];


?>