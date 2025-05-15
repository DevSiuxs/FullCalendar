<?php
header('Content-Type: application/json');

$conexion = new mysqli("localhost", "root", "", "calendario_db");

if ($conexion->connect_error) {
  die(json_encode(['error' => "Conexión fallida: " . $conexion->connect_error]));
}

$sql = "SELECT titulo as title, tipo, inicio as start, fin as end FROM eventos";
$resultado = $conexion->query($sql);

if ($resultado === false) {
  die(json_encode(['error' => $conexion->error]));
}

$eventos = [];

while ($fila = $resultado->fetch_assoc()) {
  $eventos[] = [
    'title' => $fila['title'],
    'start' => $fila['start'],
    'end' => date('Y-m-d', strtotime($fila['end'] . ' +1 day')),
    'backgroundColor' => $fila['tipo'] === 'junta' ? '#007bff' :
                      ($fila['tipo'] === 'vacaciones' ? '#28a745' : '#ffcc00'),
    'allDay' => true
  ];
}

echo json_encode($eventos);

$conexion->close();
?>
