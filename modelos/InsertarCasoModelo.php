<?php

class insertarCasoModelo
{

    
    function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function insertar($nombre, $correo ,$telefono ,$sugerencia)
    {

        //echo "llegue aqui";
        require_once("./lib/GestorBD.php");
        $gbd= new GestorBD();

        if($gbd->conectar())
        {
            $gbd->insertarCaso($nombre, $correo ,$telefono ,$sugerencia);
            /*echo "<br/>conexion correcta";
            $gbd->insertarCaso($nombre, $correo ,$telefono ,$sugerencia);
            echo "<pre>";
            print_r($data);
            echo "</pre>";*/
        }
        else
        {
            $data["errno"]=true;
        }

       
    }
}



?>