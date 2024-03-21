<?php

class InsertarCasoControlador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }
    
    public function mostrar()
    {
        //echo "<br/>estoy en mostrar";
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("insertarCaso",array());
        //mostrar el formulario
        //renderizar la vista   
    }
    public function anadir()
    {
        //recoger datos post
        //echo "<br/>estoy en anadir en este nuevo intento<br/>";
        // print_r($_POST);
        //"<br/><br/>";
        //echo $ses->obtenerValorDeSesion("CLAVE");
        //acceder al modelo

        require_once("./modelos/InsertarCasoModelo.php");
        require_once("./lib/Seguridad.php");

        $seg= new Seguridad();
        $modelo= new insertarCasoModelo();
        
        $nombre= $_POST["nombre"];
        $correo= $_POST["correo"];
        $telefono= $_POST["telefono"];
        $sugerencia= $seg->limpiar($_POST["sugerencia"]);
        $data=$modelo->insertar($nombre,$correo,$telefono, $sugerencia);
        
        if(isset($data["errno"]))
        {
            require_once("./vistas/Vista.php");
            $vista= new Vista();
            $vista->render("error500", $data);
        }
        else
        {
            require_once("./config/Enrutador.php");
            $route=new Enrutador();
            header("Location: ".$route->getRuta()."mensajeEnviado/mostrar");
        }
        
    }
}

?>