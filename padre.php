<?php
class Padre{
    protected $apellido;
    protected $monto;

    public function setApellido($apellido)
    {
        $this->apellido=$apellido;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setMonto($monto)
    {
        $this->monto=$monto;
    }
    public function getMonto()
    {
        return $this->monto;
    }
}
?>