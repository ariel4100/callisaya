<?php
class Conexion
{
    public static function conectar(){

        $con = new mysqli("localhost","root","","tiendamvc");

        if ($con->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
        }
        return $con;
    }

}