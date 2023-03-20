<?php 

    class StaticClass
    {
        public static function hello(){
            return "Hello";
        }

        public static function soma(...$num){
            $somas = 0;
            foreach($num as $n){
                $somas += $n;
            }
            return $somas;
        }

    }


    $hello = StaticClass::hello();

    echo StaticClass::soma(1, 2, 3, 4);
    echo $hello;


    class Pessoa 
    {
        // ATRIBUTOS
        private $nome;
        private $altura;
        private $cor_dos_olhos;
        private $endereco;
        private $telefone;

        // MÉTODOS
        public function acordar(): string{
            return "$this->nome acordou!";
        }
        public function correr(): string{
            return "$this->nome está correndo!";
        }
        public function trabalhar(): string{
            return "$this->nome está trabalhando!";
        }
        public function dormir(): string{
            return "$this->nome está dormindo!";
        }
    }

    $pessoa1 = new Pessoa();

    echo $pessoa1->acordar();

?>