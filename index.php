<?php
session_start();
require_once("./controladores/Controlador.php");
$controlador= new controlador();
$controlador->main();
?>