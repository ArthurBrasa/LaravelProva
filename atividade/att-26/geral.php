<?php 
    
    function inputNum($string=''){
        $input = floatval(trim(readline($string))); 
        return $input;
    }

    function soma2Numero($num1, $num2){
        return $num1 + $num2;
    }

    function mediaAritmetrica(...$notas){
        $soma = 0;
        foreach ($notas as $n => $nota) {
            $soma += $nota;
        }
        return $soma/count($notas);
    }

    function FahrenheitToCelsius($f){
        return (5 * ($f-32) / 9);
    }

    function calculaIdade($ano, $timezone="America/Sao_Paulo"){
        date_default_timezone_set($timezone);
        $ano_atual = date("Y");
        return $ano_atual - $ano;
    }

    function areaTriangulo($base, $altura) {
        return ($base * $altura)/2;
    }

    // // EXE - 1
    //  echo inputNum("Digite um Numero: ").PHP_EOL;

    // // EXE - 2
    // echo soma2Numero(inputNum("Num 1: "), inputNum("Num 2: ")).PHP_EOL;

    // // EXE - 3
    // $notas = [];
    // for($i = 0; $i < 4 ; $i++) {
    //     array_push($notas, inputNum());
    // }
    // echo mediaAritmetrica($notas[0], $notas[1],$notas[2], $notas[3]);    

    // // EXE - 4
    // echo "Didite uma temperatura em F: ";
    // echo FahrenheitToCelsius(inputNum());

    // //  EXE - 5
    // $anoNasc = inputNum("Informe o seu ano de nascimento: ");
    // echo "Você tem " . calculaIdade($anoNasc) . " anos.";

    // // EXE - 6
    // echo "Calculando área do tringulo".PHP_EOL;
    // echo "Area do triangulo: " . areaTriangulo(inputNum("Base: "), inputNum("Altura: "));

    // // EXE - 7
    // $nome = readline("Informe seu nome: ");
    // $idade = readline("Informe sua idade: ");
    // $salario = readline("Informe seu salario: ");

    // echo "$nome tem $idade anos e salario de $salario";

    // // EXE - 8
    // $saldo = 500;
    // echo "Saldo atual: $saldo".PHP_EOL;
    // $cheque = inputNum("Informe valor do cheque:");
    // $saldo += $cheque;
    // echo "Novo saldo ". $saldo;

    // // EXE - 9
    // $salarioFixo = 500;
    // $softwaresVendidosNoMes = inputNum("Vendas Totais do Mês: ");
    // $salarioFinal = $salarioFixo + ($softwaresVendidosNoMes * 50);
    // echo "O seu salario do mês de ". date("M"). " é de $salarioFinal reais.";



?>