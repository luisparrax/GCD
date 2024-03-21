<?php

class ListadoCasoControlador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function mostrar()
    {
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("revisarCaso",array());
         
    }

    //aciones que se van a realizar
    public function listar()
    {
        require_once("./modelos/ListadoCasoModelo.php");
        $modelo=new ListadoCasoModelo();
        $telefono= $_POST["telefono"];
        $data= $modelo->getCaso($telefono);

        if($data){
            if(isset($data["errno"]))
            {
                require_once("./vistas/Vista.php");
                $vista= new Vista();
                $vista->render("error500", $data);
            }
            else
            {
                require_once("./vistas/Vista.php");
                $vista= new Vista();
                $vista->render("listadoCaso", $data);
            }
           
        }
        else
        {
            $data["errorvalidacion"]="La consulta introducida no existe, inserte un numero correcto";
            require_once("./vistas/Vista.php");
            $vista= new Vista();
            $vista->render("revisarCaso",$data);
        }
       
    }
}
?>

