<?php

include 'leonidas.php';

$t2 = new Leonidas("Juan", "Piura", 5);

echo '<br> ----- Leonidas ----- ';
$t2->calcularTarifa();
echo '<br> Tarifa: ',$t2->getTarifa();
echo '<br> Seguro: ',$t2->seguro();
echo '<br> Monto: ',$t2->monto();
?>