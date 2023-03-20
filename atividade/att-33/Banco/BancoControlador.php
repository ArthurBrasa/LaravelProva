<?php 

    abstract class BancoControllador
    {
        protected $num_conta;
        protected $tipoConta;
        protected $saldo;

        public function __construct($numConta, $tipoConta, $saldo)
        {
            $this->num_conta = $numConta;
            $this->saldo = $saldo;
            $this->tipoConta = $tipoConta;
        }

        abstract protected function sacar($valor);
        abstract protected function bloquearConta();

        public function __toString()
        {
            return "
                [Número da conta = $this->num_conta]\n
                [TipoConta = $this->tipoConta]\n
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
        protected function setSaldo($saldo): self
        {
                $this->saldo = $saldo;

                return $this;
        }

        /**
         * Get the value of tipoConta
         */
        public function getTipoConta()
        {
                return $this->tipoConta;
        }

        /**
         * Set the value of tipoConta
         */
        protected function setTipoConta($tipoConta): self
        {
                $this->tipoConta = $tipoConta;

                return $this;
        }

        /**
         * Get the value of num_conta
         */
        public function getNumConta()
        {
                return $this->num_conta;
        }

        /**
         * Set the value of num_conta
         */
        protected function setNumConta($num_conta): self
        {
                $this->num_conta = $num_conta;

                return $this;
        }
    }

   


?>