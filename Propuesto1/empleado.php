<?php
class Empleado{
    private $nombre;
    private $categoria;
    private $basico;
    private $bonificacion;
    private $tipo;

    function Empleado($nombre, $categoria, $basico, $bonificacion, $tipo){
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->basico = $basico;
        $this->bonificacion = $bonificacion;
        $this->tipo = $tipo;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setBasico($basico)
    {
        $this->basico = $basico;
    }
    public function getBasico()
    {
        return $this->basico;
    }
    public function setBonificacion($bonificacion)
    {
        $this->bonificacion = $bonificacion;
    }
    public function getBonificacion()
    {
        return $this->bonificacion;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function remuneracion()
    {
        $remuneracion = $this->getBasico() + $this->getBonificacion();
        return $remuneracion;
    }
    public function aportacion()
    {
        if($this->getTipo() == 'AFP'){
            return ($this->remuneracion())*0.11;
        }
        if($this->getTipo() == 'ONP'){
            return ($this->remuneracion())*0.13;
        }
    }
    public function neto()
    {
        return ($this->remuneracion()) - ($this->aportacion());
    }
}
?>