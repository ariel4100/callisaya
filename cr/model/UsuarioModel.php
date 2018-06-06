<?php
# Incluimos la clase conexion para poder heredar los metodos de ella.
require_once('conexion.php');
session_start();
class UsuarioModel
{
    private $db;
    private $usuarios;

    public function __construct()
    {
        $this->db = Conexion::conectar();
        $this->usuarios = array();
    }

    public function login($usuario,$password)
    {
        $sql = "SELECT * FROM usuarios WHERE usuario ='$usuario' AND pass = '$password'";
        /*
        Verificamos si el usuario existe, la funcion verificarRegistros
        retorna el número de filas afectadas, en otras palabras si el
        usuario existe retornara 1 de lo contrario retornara 0
      */
        $query = mysqli_query($this->db,$sql);
        $verificar = mysqli_num_rows($query);
        // si la consulta es mayor a 0 el usuario existe
        if($verificar > 0)
        {
            $user = mysqli_fetch_array($query);
            // inicializo variable session
            $_SESSION['usuario'] = $user['usuario'];
            $_SESSION['admin'] = $user['usuario'];
            $_SESSION['estado'] = $user['estado'];
            
            if($_SESSION['estado'] == 1)
            {
                echo 'index.php';

            }else if($_SESSION['estado'] == 2 || $_SESSION['estado'] == "")
            {
                echo 'index.php';
            }
        }else{
            //error 1 el usuario o la contraseña son incorrectos 
            echo '2';
        }
        mysqli_close($this->db);
    }

    /**
     * @param $user
     * @param $pass
     * @param $nom
     * @param $ape
     * @param $nac
     * @param $email
     * @param $cel
     */
    public function registroUsuario($user, $pass, $nom, $ape, $nac, $email, $cel)
    {

       /* $user = mysqli_real_escape_string($user);
        $pass = mysqli_real_escape_string($pass);
        $nom = mysqli_real_escape_string($nom);
        $ape = mysqli_real_escape_string($ape);
        $nac = mysqli_real_escape_string($nac);
        $email = mysqli_real_escape_string($email);
        $cel = mysqli_real_escape_string($cel);*/
        //$ter = mysqli_real_escape_string($ter);

        $sql = "SELECT id FROM usuarios WHERE email ='$email'";

        $query = mysqli_query($this->db,$sql);
        $verificarCorreo = mysqli_fetch_row($query);

        if($verificarCorreo > 0)
        {
            //error 2 el correo ya existe
            echo '2';
        }else{
            $hoy = date("Y-m-d H:i:s");

            $sql = "INSERT INTO usuarios (usuario,pass,nombre,apellido,email,nacimiento,celular,fechaReg,estado)
            VALUES ('$user','$pass','$nom','$ape','$email','$nac','$cel','$hoy',2)";
            $this->db->query($sql);

            // session
            
                echo 'index.php';

        }
        //cerrar MYQSLI
    }
}