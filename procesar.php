<?php
// Datos de conexión a MySQL
$servername = "localhost";
$username = "root"; // Cambiar si es necesario
$password = ""; // Cambiar si es necesario
$dbname = "base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$rut = $_POST['rut'];
$curso = $_POST['curso'];
$comentario = $_POST['comentario'];

// Insertar los datos en la tabla
$sql = "INSERT INTO formulario (nombre, correo, rut, curso, comentario) 
VALUES ('$nombre', '$correo', '$rut', '$curso', '$comentario')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>