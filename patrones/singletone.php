<?php
class singleton
{

        private static $instance = null;
        private $numero = 100;

        public function  __construct(Type $var = null) {
        }

        public function setNumero($n)
        {
            $this->numero=$n;
        }
        
        public function getNumero()
        {
            return $this->numero;
        }
        
        public function getInstance()
        {
            if(self::$instance == null)
            {
                self::$instance = new Singleton();
            }
            return self::$instance;
        }
        
}


?>