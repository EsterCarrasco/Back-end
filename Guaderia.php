<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guaderia";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Validar los datos
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        die("El correo electrónico no es válido. Vuelve a intentarlo.");
    }

    if (strlen($password) < 4 || strlen($password) > 8) {
        die("La contraseña debe tener entre 4 y 8 caracteres.");
    }

    // Verificar si el email ya está registrado
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        die("El correo electrónico ya está registrado. Vuelve a intentarlo.");
    }

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, apellido1, apellido2, email, login, password)
            VALUES ('$nombre', '$apellido1', '$apellido2', '$email', '$login', '$password')";
if ($conn->query($sql) === true) {
    echo "Guatástico, encantados de conocerte";
    echo '<form action="Ver_usuarios.php" method="POST"> <button type="submit" class="btn">Haz click aquí para conocer a tus nuevos amigos</button>
          </form>';
    } else {
        echo "Error en el registro: " . $conn->error;
    }
}
$conn->close();
?>

