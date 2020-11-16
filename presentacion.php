<?php
include 'automovil.php';
//creando un objeto
$auto = new automovil();
$auto->placa='AQ123';
$auto->marca='Suzuki';
$auto->color='Amarillo';
$auto->precio=20000;
//accediendo a sus metodos
$auto->acelerar();
$auto->girarDerecha();
//imprimiendo algunas propiedades
echo '<br> Placa: ',$auto->placa;
echo '<br> Precio: ',$auto->calcularPrecio();
?>