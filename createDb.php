<?php

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $edad = $_POST['edad'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql_insert = "INSERT INTO users (name, lastname, age, password) 
               VALUES ('$nombre', '$apellido', '$edad', '$password')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "Datos insertados correctamente.<br>";
    } else {
        echo "Error al insertar los datos: " . $conn->error . "<br>";
    }
}

$conn->close();
