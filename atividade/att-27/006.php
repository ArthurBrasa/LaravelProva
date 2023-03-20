<?php 

    class Professor {
        private $name;
        private $nivel;

        private $Escola;
        // private $baseHoraAula = [1 => 12, 2 => 17, 3 => 25];

        public function __construct($name, $nivel, EscolaAprender $escola){
            $this->name = $name;
            $this->nivel = $nivel;
            $this->Escola = $escola;
        }

        public function setNivel($nivel){
            $this->nivel = $nivel;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function getNivel(){
            return $this->nivel;
        }

        private function getBaseHoraAula(){
            return $this->Escola->getBaseHoraAula($this->getNivel());
        }

        public function calcSalario($horasAula){
            return $this->getBaseHoraAula() * $horasAula;
        }
    }

    class EscolaAprender {
        private $professores = [];
        private $baseHoraAula = [1 => 12, 2 => 17, 3 => 25];
        private $diretor;

        public function __construct($diretor){
            $this->diretor = $diretor;
        }

        public function existProfessor($nome){
            return array_key_exists($nome, $this->professores);
        }

        public function getNomeProfessor($nome){
            return $this->professores[$nome]->getName();
        }

        public function addProfessor(Professor $professor){
            $this->professores[$professor->getName()] =  $professor;
        }

        public function calcSalarioProfessor($nameProfessor, $horasAula){
            return $this->professores[$nameProfessor]->calcSalario($horasAula);

        }

        public function getBaseHoraAula($nivel){
            return $this->baseHoraAula[$nivel];
        }

        
    }

    function linha($range = 70){
        echo str_repeat("=", $range).PHP_EOL;
    }

    
    $escolaAprender = new EscolaAprender("Naruto Usumaki");
    $statusSystem = true;
    while($statusSystem){
        echo "[1] - Add Professor  | [2] - Calcular Salário | [3] - Sair do Sistema".PHP_EOL;
        $acao = readline();

        switch ($acao) {

            // ADD PROFESSORES
            case '1':
                linha();
                $nome = trim(readline("Nome do Professor: "));
                
                while(true){
                    $nivel = readline("Nivel do Professor: ");
                    if(is_numeric($nivel) && $nivel <= 3 && $nivel >= 1){
                        break;
                    }else{
                        echo "Digite apenas numeros entre 1 e 3!".PHP_EOL;
                    }
                }

                $escolaAprender->addProfessor(new Professor($nome, $nivel, $escolaAprender));
                echo "Professor $nome adicionado com sucesso!".PHP_EOL;
                linha();
                break;
            
            //  Calculando Salario
            case '2':
                linha();
                $nome = trim(readline("Nome do Professor: "));
                if($escolaAprender->existProfessor($nome)){
                    
                    while(true){
                        $totalHorasAula = readline("Total de Horas Aula: ");
                        if(is_numeric($totalHorasAula)){
                            break;
                        }else{
                            echo "Digite apenas Números Inteiros!";
                        }
                    }
                    
                    $salario = $escolaAprender->calcSalarioProfessor($nome, $totalHorasAula);
                    echo "Salario do Professor ". $escolaAprender->getNomeProfessor($nome) . ": ". number_format($salario, 2, ',', '.') . " reais." .PHP_EOL;
                }else{
                    echo "Professor $nome não cadastrado!".PHP_EOL;
                }
                linha();
                break;

            // Sair do Sistema
            case '3':
                $statusSystem = false;
                break;
            
            default:
                linha();
                echo "Opção inválida | Error - 0x2314121".PHP_EOL;
                linha();
                break;
        }
    }




?>