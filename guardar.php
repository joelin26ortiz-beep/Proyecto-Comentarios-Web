<?php

$archivo = "comentarios.json";

// Recibir datos
$nombre = trim($_POST["nombre"] ?? "");
$comentario = trim($_POST["comentario"] ?? "");

// Validación
if ($nombre === "" || $comentario === "") {
  die("Todos los campos son obligatorios.");
}

// Leer comentarios existentes
if (file_exists($archivo)) {
  $contenido = file_get_contents($archivo);
  $comentarios = json_decode($contenido, true);

  if (!is_array($comentarios)) {
    $comentarios = [];
  }
} else {
  $comentarios = [];
}

// Agregar comentario
$comentarios[] = [
  "nombre" => $nombre,
  "comentario" => $comentario,
  "fecha" => date("Y-m-d H:i:s")
];

// Guardar el JSON
file_put_contents(
  $archivo,
  json_encode($comentarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

header("Location: index.php");
exit;
