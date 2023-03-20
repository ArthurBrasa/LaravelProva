<?php 
    /*40. Faça um programa que peça um numero inteiro positivo e em seguida mostre este numero invertido.
    Exemplo:
      12376489
      => 98467321
    */

    $num = trim(readline());


    $arrNum = str_split($num);
    $arrReverse = array_reverse($arrNum, true);
    echo " => ";
    foreach ($arrReverse as $key => $value) {
        echo "$value";
    }




?>