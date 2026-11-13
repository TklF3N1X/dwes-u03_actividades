<?php
require_once 'anime.php';
require_once 'character.php';

// Creamos los animes
$anime1 = new Anime('Dragon Ball', 'Akira Toriyama', 'Shonen', 153, 1986);
$anime2 = new Anime('One Piece', 'Eiichiro Oda', 'Shonen', 1000, 1999);
$anime3 = new Anime('Sailor Moon', 'Naoko Takeuchi', 'Shojo', 46, 1992);

// Guardamos los animes en un array
$animes = [$anime1, $anime2, $anime3];

// Creamos los personajes
$goku = new Character('Goku', 'Masculino', 42, 'Saiyan');
$vegeta = new Character('Vegeta', 'Masculino', 48, 'Saiyan');

$luffy = new Character('Luffy', 'Masculino', 19, 'Humano');
$zoro = new Character('Zoro', 'Masculino', 21, 'Humano');

$usagi = new Character('Usagi', 'Femenino', 16, 'Humano');

// Añadimos los personajes a los animes
$anime1->addCharacter($goku);
$anime1->addCharacter($vegeta);

$anime2->addCharacter($luffy);
$anime2->addCharacter($zoro);

$anime3->addCharacter($usagi);

// Mostramos los animes y sus personajes
echo '<h1>Listado de animes</h1>';

foreach ($animes as $anime) {
    echo '<h2>' . $anime->title . '</h2>';

    echo 'Autor: ' . $anime->author . '<br>';
    echo 'Año: ' . $anime->year . '<br>';
    echo 'Género: ' . $anime->genre . '<br>';
    echo 'Episodios: ' . $anime->episodes . '<br>';

    echo '<h3>Personajes</h3>';

    foreach ($anime->characters as $character) {
        echo 'Nombre: ' . $character->name . '<br>';
        echo 'Género: ' . $character->genre . '<br>';
        echo 'Edad: ' . $character->age . '<br>';
        echo 'Especie: ' . $character->species . '<br><br>';
    }

    echo 'Total de personajes: ' . $anime->countCharacters();
    echo '<hr>';
}

// Pie de página
echo '<footer>';
echo '<p>Autor: Daniel</p>';
echo '</footer>';
?>