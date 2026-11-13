<?php
require_once 'userList.inc.php';
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    // Comprobamos que los campos no estén vacíos
    if ($username == '' || $password == '') {
        $message = 'Debes rellenar todos los campos.';
    } else {
        // Buscamos el usuario
        $user = userExists($username, $users);
        if ($user == false) {
            $message = 'El usuario no existe.';
        } else {
            // Comprobamos la contraseña
            if ($user->login($password)) {
                $message = 'Login correcto. Bienvenido ' . $user->username;
            } else {
                $message = 'Contraseña incorrecta o usuario ya conectado.';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    <h1>Agenda de contactos - Login</h1>

    <form method="POST" action="">
        <label>Usuario:</label>
        <input type="text" name="username">

        <br><br>

        <label>Contraseña:</label>
        <input type="password" name="password">

        <br><br>

        <input type="submit" value="Iniciar sesión">
    </form>

    <?php
    if ($message != '') {
        echo '<h3>' . htmlspecialchars($message) . '</h3>';
    }
    ?>

</body>
</html>