<?php

class Controlador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function main()
    {
      // echo "<br> hola main<br>";
      // print_r($_GET); 
        // inicio funcion que me verifica si existe el controlador, y si no existe, envia al inicio
        $controlador="";
        $accion="";

        if(isset($_GET["controlador"]) and !empty($_GET["controlador"]))
        {
            $controlador=$_GET["controlador"];
        }
        else
        {
            $controlador="inicio";
        }

        if(isset($_GET["accion"]) and !empty($_GET["accion"]))
        {
            $accion=$_GET["accion"];
        }
        else
        {
            $accion="";
        }

        //echo "<br/>".$controlador;
        //echo "<br/>";
       // echo $accion;

        if(file_exists("./controladores/".ucfirst($controlador)."Controlador.php"))
        {
            require_once("./controladores/".ucfirst($controlador)."Controlador.php");
            $nombreClase=ucfirst($controlador)."Controlador";
            //echo "<br/>".$nombreClase;
            $contro= new $nombreClase();
            if($accion!="")
            {
                if(method_exists($contro,$accion))
                {
                    $contro->$accion();
                }
                else
                {
                    echo "Accion no existente";
                }
                
            }
            else
            {
                require_once("./vistas/Vista.php");
                $vista= new Vista();
                $vista->render("inicio",array());
            }
            //echo "<br/>existe el controlador";
        }
        else
        {
            require_once("./controladores/InicioControlador.php");
            $contro= new InicioControlador();   
        // final funcion que me verifica si existe el controlador, y si no existe, envia al inicio

        }
    }
}

?>