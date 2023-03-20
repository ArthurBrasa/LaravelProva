<?php 
    require_once "CaixaDeSom.php";

    $Caixa = new CaixaDeSom();

    echo $Caixa;
    $Caixa->ligar();
    $Caixa->aumentarVolume();
    echo $Caixa;
    $Caixa->abrirMenu();
    sleep(2);
    $Caixa->fecharMenu();
    $Caixa->diminuirVolume();
    echo $Caixa;

    




?>