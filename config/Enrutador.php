<?php

class Enrutador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function getRuta()
    {
        /*
        $partes=explode("/",$_SERVER["SCRIPT_NAME"]);
        $ruta="/".$partes[1]."/";*/

        $conf = Configuracion::getInstance();


        $ruta= $conf->getRutaServidor();
        echo $ruta;
        return $ruta;
    }

}

?>