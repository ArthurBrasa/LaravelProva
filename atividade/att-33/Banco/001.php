<?php 

    require_once "Banco.php";


    $myBanck = new Banco("Arthur", "0918041423-2", "Poupança", "70000");

    echo $myBanck;
    $myBanck->pagarBoleto(200);
    echo $myBanck->getSaldo().PHP_EOL;
    
    
    echo $myBanck->sacar(1000000);
    echo $myBanck;
    echo $myBanck->getSaldo().PHP_EOL;
    
    
    echo $myBanck->sacar(10000);
    echo $myBanck;
    echo $myBanck->getSaldo().PHP_EOL;

    $myBanck->bloquearConta();
    echo $myBanck->sacar(10);

?>