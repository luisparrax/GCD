<?php
class Configuracion
{

        private static $instance = null;
        
        private $rutaServidor;
        private $servidorBD;
        private $UsuarioBD;
        private $passwordBD;
        private $nombreBD;

        public function  __construct(Type $var = null) {

            //definir la ruta de bd en funcion del entorno en el que me encuentre.

            if(file_exists("local.txt"))
            {
                //entorno local
                $this->rutaServidor="http://localhost/PROYECTOFPHPENTREGAFINAL/";
                $this->getServidorBD="localhost";
                $this->UsuarioBD="root";
                $this->passwordBD="";
                $this->nombreBD="gcd";

            }
            else if(file_exists("pruebas.txt"))
            {
                //entorno local
                $this->rutaServidor="entornodepruebasgcd.free.nf/";
                $this->getServidorBD="sql213.infinityfree.com";
                $this->UsuarioBD="if0_36408446";
                $this->passwordBD="pxG7yuBcUwO";
                $this->nombreBD="if0_36408446_entornopruebas";

            }
            else if(file_exists("produccion.txt"))
            {
                //entorno local
                $this->rutaServidor="servidordeproducciongcd.wuaze.com/";
                $this->getServidorBD="sql305.infinityfree.com";
                $this->UsuarioBD="if0_36408861";
                $this->passwordBD="Q3hsqHTSKt5RMJH";
                $this->nombreBD="if0_36408861_produccion";

            }
        }


        public function getRutaServidor()
        {
            return $this->rutaServidor;
        }

        public function setRutaServidor($r)
        {
             $this->rutaServidor=$r;
        }

        public function getServidorBD()
        {
            return $this->servidorBD;
        }

        public function getUsuarioBD()
        {
            return $this->UsuarioBD;
        }
        
        public function getPasswordBD()
        {
            return $this->passwordBD;
        }

        public function getNombreBD()
        {
            return $this->nombreBD;
        }

       
        
        public static function getInstance()
        {
            if(self::$instance == null)
            {
                self::$instance = new Configuracion();
            }
            return self::$instance;
        }
        
}


?>