<?php 

    class Character
    {
        private $name;
        private $hp = 100;
        private $attack = 30;
        private $defense = 50;
        private $class;

        public function __construct($name='xxx', $class='xxx'){
            $this->name = $name;
            $this->class = $class;
        }

        public function hit(){
            $damage = rand(1, $this->getAttack());
            echo "O personagem \"$this->name\" causou $damage de dano!";
        }

        /**
         * Get the value of name
         */
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         */
        public function setName($name): self
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of hp
         */
        public function getHp()
        {
                return $this->hp;
        }

        /**
         * Set the value of hp
         */
        public function setHp($hp): self
        {
                $this->hp = $hp;

                return $this;
        }

        /**
         * Get the value of attack
         */
        public function getAttack()
        {
                return $this->attack;
        }

        /**
         * Set the value of attack
         */
        public function setAttack($attack): self
        {
                $this->attack = $attack;

                return $this;
        }

        /**
         * Get the value of defense
         */
        public function getDefense()
        {
                return $this->defense;
        }

        /**
         * Set the value of defense
         */
        public function setDefense($defense): self
        {
                $this->defense = $defense;

                return $this;
        }

        /**
         * Get the value of class
         */
        public function getClass()
        {
                return $this->class;
        }

        /**
         * Set the value of class
         */
        public function setClass($class): self
        {
                $this->class = $class;

                return $this;
        }
    }

    


?>