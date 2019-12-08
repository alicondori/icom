<?php
/* $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'sundayBank'
); */

$conn = mysqli_connect('localhost', 'root', '', 'icom');
if (isset($conn)) {
    echo "conexion exitosa";
}

class Conexion
{
    private $servidor;
    private $usuario;
    private $clave;
    private $database;
    /* creamos un atributo mas para habrir la conexion y cerralo */
    private $conexion;
    public function __construct()
    {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->clave = "";
        $this->database = "icom";
        /* habrimos la conexion ya que ni bien se instancie la clase necesitaremos de ella */
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->database);
    }
    public function cerrarConexion()
    {
        $this->conexion->close();
    }

    /* consultas */
    /* leer */
    public function ejecutarConsulta($sql)
    {
        $contenedor = $this->conexion->query($sql);
        return $contenedor->fetch_all();
        /* el fecth_all crea una tabla que contiene todo los  datos pedido */
    }
    /* crear,actualizar, eliminar */
    public function ejecutarActualizacion($sql)
    {
        $this->conexion->query($sql);
    }
}
