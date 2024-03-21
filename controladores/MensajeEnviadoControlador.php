<?php

class MensajeEnviadoControlador
{   
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function mostrar()
    {

       // echo "<br/>estoy en mostrar";
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("mensajeEnviado",array());
        //mostrar el formulario
        //renderizar la vista   
    }
}

?>