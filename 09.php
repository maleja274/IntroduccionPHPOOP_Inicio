<?php include 'includes/header.php';

//conectar a la base de datos con Mysqli.

$db = new mysqli('localhost', 'root', 'loreto.2', 'bienesraices_crud');

// creamos el query
$query = "SELECT titulo, imagen, precio, descripcion from propiedades";

// lo preparamos
$stmt = $db->prepare($query);

// lo ejecutamos
$stmt->execute();

// creamos la variable
$stmt->bind_result($titulo, $imagen, $precio, $descripcion);

//asignamos el resultado
// $stmt->fetch();

//imprimir el resultado
while ($stmt->fetch()):
var_dump($titulo);
var_dump($imagen);
var_dump($precio);
var_dump($descripcion);
endwhile;


include 'includes/footer.php';