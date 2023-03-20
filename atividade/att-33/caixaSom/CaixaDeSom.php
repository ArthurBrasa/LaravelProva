<?php 
    require_once "Controlador.php";

    class CaixaDeSom implements ControladorCaixaSom
    {
        private $ligado;
        private $volume;
        private $play_;
        private $menu = ["Pop", "Rock", "Kpop", "Sertanejo", "jazz"];


        function __construct($ligado=false, $volume=50)
        {
            $this->ligado = $ligado;
            $this->volume = $volume; 
            $this->play_ = false;         
        }

        function __toString()
        {
            return "
                [Ligado = $this->ligado]\n
                [Volume = $this->volume]\n          
            ";
        }

        public function ligar(){
            $this->ligado = true;
        }

        public function desligar(){
            $this->ligado = false;
        }
        public function abrirMenu(){
            print_r($this->menu);
        }
        public function fecharMenu(){
            popen("cls", "w");
        }
        public function aumentarVolume(){
            if($this->volume <= 100){
                $this->volume += 10;
            }
        }
        public function diminuirVolume(){
            if($this->volume >= 0){
                $this->volume -= 10;
            }
        }
        public function ligarMudo(){
            $this->volume = 0;
        }
        public function desligarMudo(){
            $this->volume = 50;
        }
        public function play(){
            $this->play_ = true;
        }
        public function pause(){
            $this->play_ = false;
        }
        public function avancarMusica(){
            echo "Avançando Música!";
        }
        public function retrocederMusica(){
            echo "Retrocendendo Música!";
        }
    




        /**
         * Get the value of play_
         */
        public function getPlay()
        {
                return $this->play_;
        }

        /**
         * Set the value of play_
         */
        public function setPlay($play_): self
        {
                $this->play_ = $play_;

                return $this;
        }

        /**
         * Get the value of volume
         */
        public function getVolume()
        {
                return $this->volume;
        }

        /**
         * Set the value of volume
         */
        public function setVolume($volume): self
        {
                $this->volume = $volume;

                return $this;
        }

        /**
         * Get the value of menu
         */
        public function getMenu()
        {
                return $this->menu;
        }

        /**
         * Set the value of menu
         */
        public function setMenu($menu): self
        {
                $this->menu = $menu;

                return $this;
        }

        /**
         * Get the value of ligado
         */
        public function getLigado()
        {
                return $this->ligado;
        }

        /**
         * Set the value of ligado
         */
        public function setLigado($ligado): self
        {
                $this->ligado = $ligado;

                return $this;
        }
    }


?>