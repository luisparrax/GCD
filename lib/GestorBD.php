<?php

class GestorBD
{
    private $conn;


    public function __construct(Type $var = null) {
        $this->var = $var;
    }
  /*
    public function conectar()
    {
        $conf = Configuracion::getInstance();
        $s=$conf->getServidorBD();
        $u=$conf->getUsuarioBD();
        $p=$conf->getPasswordBD();
        $n=$conf->getNombreBD();

        $s=$conf->getServidorBD();
        $u=$conf->getUsuarioBD();
        $p=$conf->getPasswordBD();
        $n=$conf->getNombreBD();

        
        $s="sql213.infinityfree.com";
        $u="if0_36408446";
        $p="pxG7yuBcUwO";
        $n="if0_36408446_entornopruebas";




        $this->conn = new mysqli("$s","$u","$p","$n");
        
        if($this->conn->connect_error!=null)
        {
            return  false;

        }
        else
        {
            return true;
        }
*/

        
        public function conectar()
    {
        $this->conn = new mysqli("localhost","root","","gcd");
        if($this->conn->connect_error!=null)
        {
            return  false;

        }
        else
        {
            return true;
        }
    }
    
    

    public function getCaso($telefono)
    {
        $data = array(); // eliminar esta linea si el codigo deja de funcionar
        $sql= "SELECT * FROM caso WHERE telefono='".$telefono."'";
        //echo $sql;

        $result = $this->conn->query($sql);
        if($result->num_rows > 0)
        {
             while ($row = $result->fetch_assoc())
             {
                $data[]=$row;
             }
        }
        return $data;
    }

    public function insertarCaso($nombre, $correo ,$telefono ,$sugerencia)
    {

        $sql= "INSERT INTO caso (nombre, correo ,telefono ,sugerencia) VALUE('".$nombre."','".$correo."','".$telefono."','".$sugerencia."')";
        echo $sql;

        /*
        $result = $this->conn->query($sql);*/
        if($result=$this->conn->query($sql))
        {
            return true;
        }
        return false;
    }

    /*
    public function revisar($telefono)
    {

        $sql= "SELECT * FROM caso WHERE telefono=".$telefono;
        //echo $sql;

        $data=array();

        $result = $this->conn->query($sql);
        if($result->num_rows > 0)
        {
             return true;
        }
        return false;
    }*/

    
}




?>