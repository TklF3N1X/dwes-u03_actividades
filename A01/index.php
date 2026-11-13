<?php
require_once 'hero.php';
require_once 'weapon.php';
require_once 'armor.php';
require_once 'potion.php';

// Creamos el héroe
$hero = new Hero('Arthas', 'humano', 'guerrero');

echo '<h1>Inventario de héroe</h1>';
echo '<h2>Héroe inicial</h2>';
echo $hero . '<br>';

// Creamos las armas
$weapon1 = new Weapon('Espada', 15);
$weapon2 = new Weapon('Arco', 10);

// Creamos la armadura
$armor = new Armor('Armadura de hierro', 20);

// Creamos las pociones
$potion1 = new Potion(20);
$potion2 = new Potion(35);
$potion3 = new Potion(10);

// Añadimos los objetos al inventario
$hero->weapons = [$weapon1, $weapon2];
$hero->armor = $armor;
$hero->potions = [$potion1, $potion2, $potion3];

echo '<h2>Inventario del héroe</h2>';

foreach ($hero->weapons as $weapon) {
    echo $weapon->toString() . '<br>';
}
echo $armor->toString() . '<br>';
echo 'Pociones disponibles: ' . count($hero->potions) . '<br>';

// Probamos el ataque
echo '<h2>Combate</h2>';
echo 'Ataque total: ' . $hero->attack() . '<br>';

// Probamos la defensa
$damage = 15;
echo 'Defensa después de recibir ' . $damage . ' de daño: ';
echo $hero->defense($damage) . '<br>';

// Probamos las pociones
echo '<h2>Uso de poción</h2>';
echo 'Vida antes de usar la poción: ' . $hero->health . '<br>';
$hero->usePotion();
echo 'Vida después de usar la poción: ' . $hero->health . '<br>';
echo 'Pociones restantes: ' . count($hero->potions) . '<br>';

// Mostramos el héroe después de las modificaciones
echo '<h2>Héroe después de las modificaciones</h2>';
echo $hero;
?>