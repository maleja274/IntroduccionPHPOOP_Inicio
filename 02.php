<?php 

declare( strict_types = 1);


include 'includes/header.php';

// ENCAPSULACION

class Producto {

    //public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
    //protected - se puede acceder o modificar unicamente en la clase
    //private solo miembros de la misma clase pueden acceder a el

    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    { 

    }
    public function mostrarProducto() : void {
        echo "El Producto es : " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    public function getNombre() : string {
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 500, true);
$producto->mostrarProducto();

echo $producto->getNombre();
$producto->setNombre('Nuevo nombre');


echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor', 800, false);
$producto2->mostrarProducto();

echo $producto2->getNombre();
$producto2->setNombre('Nuevo nombre2');


echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';