<?php
include('config/database2.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db, "select nombre from Usuarios where nombre = '$user_check' ");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['nombre'];

if (!isset($_SESSION['login_user'])) {
    $_SESSION['logeado'] == 0;
} else {
    $_SESSION['logeado'] == 1;
}
