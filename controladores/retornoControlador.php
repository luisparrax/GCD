<?php
class RetornoControlador {
   public function __construct(Type $var = null) {
    $this->var = $var;
   }

    public function irAInsertarCaso() {
        // Redirigir a la página insertarCaso
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("insertarCaso",array());
    }

    public function irARevisarCaso() {
        // Redirigir a la página revisarCaso
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("revisarCaso",array());
    }
}
?>