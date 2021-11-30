<?php

include('config/database.php');
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['nombre'];
    $password = $_POST['apellido'];

    $query = $connection->prepare("SELECT * FROM Usuarios WHERE nombre=:username");
    $query->bindParam("nombre", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">No existe el usuario!</p>';
    } else {
        if ($password == $result['apellido']) {
            $_SESSION['user_id'] = $result['id'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
