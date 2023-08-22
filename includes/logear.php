<?php
require 'conn.php';
session_start();
$usuario = $_POST['usuariolg'];
$password = $_POST['passlg'];
$_SESSION['usuario'] = $usuario;

$consulta = "SELECT *  FROM users WHERE user_correo = '$usuario' and user_pass = '$password' ";
$resultado = mysqli_query($conn, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    echo '<script> alert("VERIFICADO");
    // location.href="../pages/index.php";
    </script>';
    header("Location: ../pages/index.php");
} else {
    echo '<script> alert("DATOS INCORRECTOS");
     location.href="../pages/login-page.php";
        </script>';
}

    // header("Location:index.php");
