<?php
require_once 'cliente.php';
require_once 'producto.php';
require_once 'lineaPedido.php';
require_once 'pedido.php';
require_once 'cheque.php';
require_once 'efectivo.php';
require_once 'tarjeta.php';

// Creamos los productos
$producto1 = new Producto('Portátil', 2, 10, 750);
$producto2 = new Producto('Ratón', 0.2, 30, 20);
$producto3 = new Producto('Teclado', 0.8, 15, 45);
$producto4 = new Producto('Monitor', 3.5, 8, 180);

// Creamos el cliente
$cliente = new Cliente('Juan Pérez', 'Calle Mayor 10');

// Mostramos los productos
echo '<h1>Gestión de pedidos</h1>';

echo '<h2>Productos disponibles</h2>';
echo $producto1->toString() . '<br><br>';
echo $producto2->toString() . '<br><br>';
echo $producto3->toString() . '<br><br>';
echo $producto4->toString() . '<br><br>';

// Mostramos el cliente
echo '<h2>Cliente</h2>';
echo $cliente->toString() . '<br>';

// Creamos el primer pedido
$pedido1 = new Pedido($cliente, date('d/m/Y'), 'Pendiente');

$linea1 = new LineaPedido($producto1, 1, $producto1->getPrecio());
$linea2 = new LineaPedido($producto2, 2, $producto2->getPrecio());

$pedido1->addLinea($linea1);
$pedido1->addLinea($linea2);

// Pago mediante cheque
$pago1 = new Cheque($pedido1->calcularTotal(), 'Juan Pérez', 'Santander');
$pedido1->setPago($pago1);

// Creamos el segundo pedido
$pedido2 = new Pedido($cliente, date('d/m/Y'), 'Enviado');

$linea3 = new LineaPedido($producto3, 1, $producto3->getPrecio());
$linea4 = new LineaPedido($producto4, 1, $producto4->getPrecio());

$pedido2->addLinea($linea3);
$pedido2->addLinea($linea4);

// Pago en efectivo
$pago2 = new Efectivo($pedido2->calcularTotal(), 'Juan Pérez');
$pedido2->setPago($pago2);

// Creamos el tercer pedido
$pedido3 = new Pedido($cliente, date('d/m/Y'), 'Entregado');

$linea5 = new LineaPedido($producto2, 1, $producto2->getPrecio());
$linea6 = new LineaPedido($producto3, 2, $producto3->getPrecio());

$pedido3->addLinea($linea5);
$pedido3->addLinea($linea6);

// Pago mediante tarjeta
$pago3 = new Tarjeta($pedido3->calcularTotal(), '**** **** **** 1234', '12/2028');
$pedido3->setPago($pago3);

// Mostramos los pedidos
echo '<h2>Pedidos realizados</h2>';

echo '<h3>Pedido 1</h3>';
echo $pedido1->toString();
echo '<hr>';

echo '<h3>Pedido 2</h3>';
echo $pedido2->toString();
echo '<hr>';

echo '<h3>Pedido 3</h3>';
echo $pedido3->toString();
?>