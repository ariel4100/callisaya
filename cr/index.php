<?php
require_once 'model/conexion.php';
//require_once '../../controller/admin/PersonasController.php';

//$admin = new PersonasController;
//$admin -> Index();
$controller = 'Usuarios';

if(!isset($_REQUEST['c']))
{
  require_once "controller/".$controller."Controller.php";
  $controller = ucwords($controller) . 'Controller';
  $controller = new $controller;
  $controller->Index();
  //var_dump($controller);
}else
{
  // Obtenemos el controlador que queremos cargar
  $controller = strtolower($_REQUEST['c']);
  $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

   // Instanciamos el controlador
   require_once "controller/".$controller."Controller.php";
   $controller = ucwords($controller) . 'Controller';
   $controller = new $controller;
   
   // Llama la accion
   call_user_func( array( $controller, $accion ) );
}
?>
