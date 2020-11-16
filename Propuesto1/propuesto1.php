<?php
include 'empleado.php';
//creando un objeto
$emp = new Empleado("Junior", "A", 100, 20, "AFP");

echo '<br> Remuneración: ',$emp->remuneracion();
echo '<br> Aportación: ',$emp->aportacion();
echo '<br> Neto: ',$emp->neto();
?>