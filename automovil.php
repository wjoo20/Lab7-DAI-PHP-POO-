<?php
class automovil{
    //declaracion de atributos
    public $placa;
    public $marca;
    public $color;
    public $precio;
    //declaracion metodo
    function acelerar()
    {
        echo 'Acelerar la marcha';
    }
    function girarDerecha()
    {
        echo '<br>Girando a la derecha';
    }
    function calcularPrecio()
    {
        return $this->precio*1.18;;
    }
}
?>