<?php 
    require_once "BancoControlador.php";
    require_once "Pagamento.php";

    class Banco extends BancoControllador implements Pagamento
    {
        private $nome;
        private $statusConta;

        public function __construct($nome, $numeroConta, $tipoConta, $saldoConta)
        {
            parent::__construct($numeroConta, $tipoConta, $saldoConta);
            $this->nome = $nome;
            $this->statusConta = true;
        }
        
        function bloquearConta()
        {   
            $this->statusConta = false;
            echo "Conta Bloqueada!\n";
        }

        function sacar($valor)
        {
            if($this->statusConta){
                if($valor <= $this->getSaldo()){
                    $this->setSaldo($this->getSaldo() - $valor);
                }else{
                    echo "Saldo Insuficiente!\n";
                }
            }else{
                    echo "Sua conta está temporariamente Bloqueada!\n";
                }
        }

        function pagarComSaldo($valorFatura, $pagamento)
        {
            $pagamento -= $valorFatura;
            $this->setSaldo($pagamento);
        }

        function pagarBoleto($valorBoleto)
        {
            if($valorBoleto > $this->getSaldo()){
                return "Saldo Insuficiente!";
            }else {
                $this->pagarComSaldo($valorBoleto, $this->getSaldo());
            }
        }

    }

?>