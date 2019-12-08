<?php
class CUsuario{
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $sexo;

    public function __construct()
    {
        $this->nombre="";
        $this->apellido="";
        $this->email="";
        $this->password="";
        $this->sexo="";
    }
}
?>