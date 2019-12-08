<?php


class usuarioDao{
    public static function listarDatos(){
        $con =new Conexion();
        $cont=$con->ejecutarConsulta("SELECT * from usuario");
        $con->cerrarConexion();
        return $cont;
    }
}
?>