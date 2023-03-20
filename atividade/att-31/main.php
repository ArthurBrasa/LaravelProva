<?php 

    include_once "Character.php";

    // CLEAR
    popen("cls", "w");

    // SETTINGS
    $STATES = ["CHARACTER", "MENU", "COMBAT", "CREDITS", "QUIT"];
    $OPTIONS = count($STATES);
    
    // OBJECTS GAME
    $character = new Character();

    // MAIN LOOP
    $start = true;
    while($start){
        foreach($STATES as $i => $state){
            echo ($i+1) ." => $state |";
        }
        $screenOptions = readline();
        if(is_numeric($screenOptions) && $screenOptions >= 1 && $screenOptions <= $OPTIONS){
            $screen = $STATES[$screenOptions-1];
        }else{
            $screen = "DEFAULT";
        }
        switch ($screen) {
            case 'CHARACTER':
                popen("cls", "w");
                echo "===========Criação do Personagem===========".PHP_EOL;
                $name = readline("Nickname: ");
                $class = readline("Class: ");
                echo "===========================================".PHP_EOL;
                $character->setName($name);
                $character->setClass($class);
                sleep(2);
                popen("cls", "w");
                echo "===========================================".PHP_EOL;
                echo "Personagem ". $character->getName() . " criado com sucesso!".PHP_EOL;
                echo "Classe Personagem: ".$character->getClass().PHP_EOL;
                break;
            case "QUIT":
                popen("cls", "w");
                echo "Saindo do Jogo...";
                sleep(2);
                $start = false;
            
            default:
                break;
        }


    }



?>