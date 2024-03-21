<?php

class Vista
{
        function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function render($vista,$data)
    {

        //obtener ruas de ficheros css y javascrito
        require_once("./config/Enrutador.php");
        require_once("./lib/Seguridad.php");

        $seg= new Seguridad();

        $enrutador= new Enrutador();
        $ruta=$enrutador->getRuta();
        echo $ruta;

        if(file_exists("./vistas/".$vista.".php"))
        {
            include_once "./vistas/".$vista.".php";
        }
    }
}