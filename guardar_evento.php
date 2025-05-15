<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Verificar si los datos POST están llegando
if (!isset($_POST['title']) || !isset($_POST['type']) || !isset($_POST['start']) || !isset($_POST['end'])) {
  die("Faltan parámetros requeridos");
}

$conexion = new mysqli("localhost", "root", "", "calendario_db");

if ($conexion->connect_error) {
  die("Conexión fallida: " . $conexion->connect_error);
}

// Preparar la consulta con los nombres correctos de las columnas
$sql = "INSERT INTO eventos (titulo, tipo, inicio, fin) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);

if ($stmt === false) {
  die("Error en la preparación: " . $conexion->error);
}

// Vincular parámetros (esto también previene inyección SQL)
$stmt->bind_param("ssss", $_POST['title'], $_POST['type'], $_POST['start'], $_POST['end']);

if ($stmt->execute()) {
  echo "Evento guardado correctamente";
} else {
  echo "Error al guardar: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>