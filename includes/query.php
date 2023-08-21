<?php
include '../includes/conn.php';

// Supongamos que obtienes el nivel de acceso del usuario desde la base de datos
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);
$mess = ['chat_rep'];
// $userId = 123;
// ID del usuario actual (por ejemplo)
// $sql = "SELECT nivel_acceso FROM usuarios WHERE id = $userId";
// $result = $conn->query($sql);

$check_data = "SELECT chat_rep FROM chatbot WHERE chat_query = $mess";
$run_query = mysqli_query($conn, $check_data) or die("Error");

if (mysqli_num_rows($run_query) > 0) {
    // $row = $run_query->fetch_assoc();
    $fetch_data = mysqli_fetch_assoc($run_query);
    // $nivelAcceso = $row["nivel_acceso"];
    $replay = $fetch_data['chat_rep'];


    // Utilizamos la estructura switch para manejar diferentes casos según el nivel de acceso
    switch ($replay) {
        case "chat_rep":
            echo "¡Bienvenido Administrador!";
            // Aquí puedes colocar el código para acciones específicas de administrador
            break;
        case "usuario":
            echo "¡Hola Usuario!";
            // Aquí puedes colocar el código para acciones específicas de usuario
            break;
        case "invitado":
            echo "¡Hola Invitado!";
            // Aquí puedes colocar el código para acciones específicas de invitado
            break;
        default:
            echo "Nivel de acceso no válido.";
            break;
    }
} else {
    echo "Usuario no encontrado.";
}

$conn->close();
