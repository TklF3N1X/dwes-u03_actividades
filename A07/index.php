<?php
require_once 'utils.inc.php';
require_once 'team.php';
require_once 'grandprix.php';

$team1 = new Team('Ducati', 1);
$team2 = new Team('Yamaha', 2);
$team3 = new Team('KTM', 3);

$rider1 = new Rider('Marc Márquez', '17/02/1993', 93);
$rider2 = new Rider('Francesco Bagnaia', '14/01/1997', 63);

$team1->addRider($rider1);
$team1->addRider($rider2);

$mechanic1 = new Mechanic('David García', '10/05/1980', 'Motor');
$mechanic2 = new Mechanic('Carlos López', '20/08/1985', 'Neumáticos');

$team1->addMechanic($mechanic1);
$team1->addMechanic($mechanic2);

$rider3 = new Rider('Fabio Quartararo', '20/04/1999', 20);
$rider4 = new Rider('Alex Rins', '08/12/1995', 42);

$team2->addRider($rider3);
$team2->addRider($rider4);

$mechanic3 = new Mechanic('Miguel Torres', '12/03/1978', 'Electricidad');
$mechanic4 = new Mechanic('Pedro Sánchez', '05/06/1982', 'Suspensión');

$team2->addMechanic($mechanic3);
$team2->addMechanic($mechanic4);

$rider5 = new Rider('Pedro Acosta', '25/05/2004', 37);
$rider6 = new Rider('Brad Binder', '11/08/1995', 33);

$team3->addRider($rider5);
$team3->addRider($rider6);

$mechanic5 = new Mechanic('Javier Ruiz', '15/09/1981', 'Frenos');
$mechanic6 = new Mechanic('Andrés Martín', '22/02/1984', 'Electrónica');

$team3->addMechanic($mechanic5);
$team3->addMechanic($mechanic6);

echo '<h1>Campeonato MotoGP</h1>';

echo '<h2>Equipos</h2>';

echo '<h3>Equipo 1</h3>';
echo $team1->toString();
echo '<hr>';

echo '<h3>Equipo 2</h3>';
echo $team2->toString();
echo '<hr>';

echo '<h3>Equipo 3</h3>';
echo $team3->toString();
echo '<hr>';

$circuit1 = new Circuit('Circuito de Jerez', 'España', 25, 'Jerez', 4.4, 8, 5);

$circuit2 = new Circuit('Mugello', 'Italia', 23, 'Scarperia', 5.2, 6, 9);

$circuit3 = new Circuit('Circuito de Assen', 'Países Bajos', 26, 'Assen', 4.5, 6, 12);


$gp1 = new GrandPrix('10/05/2026', $circuit1);
$gp2 = new GrandPrix('14/06/2026', $circuit2);
$gp3 = new GrandPrix('28/06/2026', $circuit3);

$gp1->addRider(1, $rider1);
$gp1->addRider(2, $rider3);
$gp1->addRider(3, $rider5);
$gp1->addRider(4, $rider2);
$gp1->addRider(5, $rider4);
$gp1->addRider(6, $rider6);

$gp2->addRider(1, $rider3);
$gp2->addRider(2, $rider1);
$gp2->addRider(3, $rider4);
$gp2->addRider(4, $rider5);
$gp2->addRider(5, $rider6);
$gp2->addRider(6, $rider2);

$gp3->addRider(1, $rider5);
$gp3->addRider(2, $rider2);
$gp3->addRider(3, $rider1);
$gp3->addRider(4, $rider6);
$gp3->addRider(5, $rider3);
$gp3->addRider(6, $rider4);

echo '<h2>Comprobación de posiciones</h2>';

if ($gp1->addRider(1, $rider6)) {
    echo 'Piloto añadido correctamente.';
} else {
    echo 'La posición 1 ya está ocupada. No se ha añadido el piloto.';
}

echo '<hr>';
echo '<h2>Grandes Premios</h2>';

echo '<h3>Gran Premio 1</h3>';
echo $gp1->toString();

echo '<hr>';

echo '<h3>Gran Premio 2</h3>';
echo $gp2->toString();

echo '<hr>';

echo '<h3>Gran Premio 3</h3>';
echo $gp3->toString();
?>