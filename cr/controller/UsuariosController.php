<?php
require_once 'model/UsuarioModel.php';
require_once ('model/conexion.php');
//session_start();
class UsuariosController{

    private $userm;
    private $title;

    public function __construct()
    {
        $this->userm = new UsuarioModel;
    }

    public function Index()
    {
        $this->title = 'inicio';
        require_once 'view/header.php';
        require_once 'view/inicio.php';
        require_once 'view/footer.php';
    }  
    public function nosotros()
    {
        $this->title = 'nosotros';
        require_once 'view/header.php';
        require_once 'view/nosotros.php';
        require_once 'view/footer.php';
    }
    public function producto()
    {
        $this->title = 'productos';
        require_once 'view/header.php';
        if(isset($_SESSION['estado']))
        {
            require_once 'view/producto.php';
            if(isset($_SESSION['estado']) == 1 && $_REQUEST['a'] == 'sidebar')
            {
                return "administrador";
            }
        }else{
            require_once 'view/login.php';
        }
        require_once 'view/footer.php';
    }
    public function productoLogin()
    {
        //$con =  Conexion::conectar();

        //var_dump($_POST);
        
        //var_dump($_REQUEST);
        //exit('lol');
        $usuario = $_POST['user'];
        $password = $_POST['pass'];

        if(empty($usuario) || empty($password))
        {
            echo '1';
        }else{
            $this->userm->login($usuario,$password);
        }
    }
    public function productoReg()
    {
        
        $usuario    = $_POST['usuario'];
        $password   = $_POST['password'];
        $nombre     = $_POST['nombre'];
        $apellido   = $_POST['apellido'];
        $nacimiento = $_POST['nacimiento'];
        $email      = $_POST['email'];
        $celular    = $_POST['celular'];
        //$terminos   = $_POST['terminos'];
        
        
        if(empty($usuario) || empty($password)
         || empty($nombre) || empty($apellido)
         || empty($nacimiento)|| empty($email) 
         || empty($celular))
        {
            //error 1 usuario o pass incorrectos
            echo '1';
        }else{
           $this->userm->registroUsuario($usuario,$password,$nombre,$apellido,$nacimiento,$email,$celular);
        }   
    }
    public function contacto()
    {
        $this->title = 'contacto';
        require_once 'view/header.php';
        require_once 'view/contacto.php';
        require_once 'view/footer.php';
    }
}
?>