<?php

 class ListadoCasoModelo
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    

    public function getCaso($telefono)
    {
        require_once("./lib/GestorBD.php");
        $gbd= new GestorBD();

        if($gbd->conectar())
        {
            echo "<br/>conexion correcta";
            $data=$gbd->getCaso($telefono);
            /*echo "<pre>";
            print_r($data);
            echo "</pre>";*/
        }
        else
        {
            $data["errno"]=true;
        }

        return $data;

        

    }
}


?>