<?php
require_once 'moto.php';
require_once 'coche.php';
require_once 'camion.php';

// Creamos una moto
$moto = new Moto('Yamaha', 'YZF-R7', 689, '1234ABC', 2, false);

// Creamos un coche
$coche = new Coche('BMW', 'M5', 4395, '5678DEF', 2, true);

// Creamos un camión
$camion = new Camion('Mercedes', 'Actros', 16000, '9012GHI', 8000, 12000, 4);


// Probamos los getters y setters de la moto
$moto->modelo = 'R7';

echo '<h1>Estructura de vehículos</h1>';

echo '<h2>Moto</h2>';
echo $moto . '<br><br>';
echo 'Marca: ' . $moto->marca . '<br>';
echo 'Modelo modificado: ' . $moto->modelo . '<br>';

echo '<h3>Métodos de la moto</h3>';
echo $moto->frenarDelantero() . '<br>';
echo $moto->frenarTrasero() . '<br>';


// Probamos los getters y setters del coche
$coche->plazas = 4;

echo '<hr>';
echo '<h2>Coche</h2>';
echo $coche . '<br><br>';
echo 'Marca: ' . $coche->marca . '<br>';
echo 'Plazas modificadas: ' . $coche->plazas . '<br>';

echo '<h3>Método del coche</h3>';
echo $coche->quitarCapota() . '<br>';


// Probamos los getters y setters del camión
$camion->carga = 15000;

echo '<hr>';
echo '<h2>Camión</h2>';
echo $camion . '<br><br>';
echo 'Marca: ' . $camion->marca . '<br>';
echo 'Carga modificada: ' . $camion->carga . '<br>';
?>