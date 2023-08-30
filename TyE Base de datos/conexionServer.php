<?php

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión establecida correctamente";

// Consulta para seleccionar todos los registros de la tabla 'usuarios'
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Recorre los resultados e imprímelos
    while ($row = $result->fetch_assoc()) {
        print_r($row);
    }
} else {
    echo "No se encontraron resultados";
}

// Cierra la conexión
$conn->close();
?>