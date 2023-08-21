<?php
require '../includes/conn.php';
sleep(2);

// $nombre = $_POST['namerg'];
// $dni = $_POST['dnirg'];
// $usuario = $_POST['usuariorg'];
// $password = $_POST['passrg'];

// if (repe($dni, $usuario, $conn) == 1) {
//     echo '<script> alert("ESTE USUARIO YA EXISTE");
//         location.href="../pages/index.php";
//         </script>';
// } else {
//     $insertar = "INSERT INTO users (user_name,user_dni,user_correo,user_pass) VALUES('$nombre','$dni','$usuario', '$password')";
//     $resultado = mysqli_query($conn, $insertar);
//     echo '<script> alert("registrado correctamente");
//         location.href="../pages/index.php";
//         </script>';
// }


// function repe($dni, $user, $conn)
// {
//     $sql = "SELECT * FROM users WHERE dni = '$dni' and usuario = '$user' ";
//     $result = mysqli_query($conn, $sql);

//     if (mysqli_num_rows($result) > 0) {
//         return 1;
//     } else {
//         return 0;
//     }
// }

if (isset($_POST['save'])) {
    $nombre = $_POST['namerg'];
    $dni = $_POST['dnirg'];
    $usuario = $_POST['usuariorg'];
    $password = $_POST['passrg'];

    $query = "INSERT INTO users (user_name, user_dni, user_correo,user_pass ) VALUES ('$nombre','$dni', '$usuario','$password')";

    $res = mysqli_query($conn, $query);

    if (!$res) {
        die("Query failed");
    }

    $_SESSION['message'] = "Task saved successfully";
    $_SESSION['message_type'] = 'success';

    header("Location:index.php");
}
