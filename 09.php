<?php include 'includes/header.php';

//conectar a la base de datos con Mysqli.

$db = new mysqli('localhost', 'root', 'loreto.2', 'bienesraices_crud');

var_dump($db);


include 'includes/footer.php';