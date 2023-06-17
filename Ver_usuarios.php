<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guaderia";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

$sql = "SELECT nombre, apellido1, email FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Primer Apellido</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["nombre"]."</td><td>".$row["apellido1"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron usuarios registrados.";
}

$conn->close();
?>
