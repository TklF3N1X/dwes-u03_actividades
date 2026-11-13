<?php
require_once 'User.inc.php';

$users = [];

for ($i = 1; $i <= 15; $i++) {
    $username = 'usuario' . $i;
    $password = '1234';
    $mail = $username . '@gmail.com';

    $users[] = new User($username, $password, $mail);
}
?>