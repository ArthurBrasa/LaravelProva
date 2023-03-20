<?php 

    class Conta 
    {
        private $nome;
        private $cpf;
        private $cnpj;
        private $tipo;
        private $saldo;

        function __construct($nome, $tipo, $saldo, $cpf=false, $cnpj=false)
        {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->cnpj = $cnpj;
            $this->tipo = $tipo;
            $this->saldo = $saldo;
            
        }

        function __toString()
        {
            return "
                [Nome = $this->nome]\n
                [cpf = $this->cpf]\n
                [cnpj = $this->cnpj]\n
                [saldo = $this->saldo]\n
                [tipo = $this->tipo]\n
            ";
        }

        /**
         * Get the value of saldo
         */
        public function getSaldo()
        {
                return $this->saldo;
        }

        /**
         * Set the value of saldo
         */
        public function setSaldo($saldo): self
        {
                $this->saldo = $saldo;

                return $this;
        }

        /**
         * Get the value of tipo
         */
        public function getTipo()
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         */
        public function setTipo($tipo): self
        {
                $this->tipo = $tipo;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of cnpj
         */
        public function getCnpj()
        {
                return $this->cnpj;
        }

        /**
         * Set the value of cnpj
         */
        public function setCnpj($cnpj): self
        {
                $this->cnpj = $cnpj;

                return $this;
        }

        /**
         * Get the value of cpf
         */
        public function getCpf()
        {
                return $this->cpf;
        }

        /**
         * Set the value of cpf
         */
        public function setCpf($cpf): self
        {
                $this->cpf = $cpf;

                return $this;
        }
    }



    // 


    $conta1 = new Conta("Arthur", "Poupança", "500", "071.431.341-00");
    $conta2 = new Conta("Francisco", "Corrente", "5000", cnpj:"531.131.000-09");
    $conta3 = new Conta("Maria", "Universitária", "1000", "171.831.341-10");


    echo $conta1;
    echo $conta2;
    echo $conta3;

?>