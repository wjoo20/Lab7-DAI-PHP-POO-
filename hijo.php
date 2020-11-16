<?php
require 'padre.php';
class Hijo extends Padre{
    protected $nombre;
    protected $edad;

    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setEdad($edad)
    {
        $this->edad=$edad;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function imprimirDatos()
    {
        echo '+++++++ Datos de la clase Derivada +++++++';
        echo '<br> Apellido: ',$this->getApellido();
        echo '<br> Nombre: ',$this->getNombre();
        echo '<br> Edad: ',$this->getEdad();
        echo '<br> Monto Heredado S/. : ',$this->getMonto();
    }
}
?>