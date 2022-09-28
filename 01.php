<?php 

declare( strict_types = 1);


include 'includes/header.php';


// Definir una clase forma en php 5 y php 7
// class Producto {
//     public $nombre;
//     public $precio;
//     public $disponible;

//     public function __construct(string $nombre, int $precio, bool $disponible)
//     {
//         $this->nombre = $nombre;
//         $this->precio = $precio;
//         $this->disponible = $disponible;
        
//     }
// }

// definir clase con php 8

class Producto {
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    { 
    }
    public function mostrarProducto() {
        echo "El Producto es : " . $this->nombre . " y su precio es de: " . $this->precio;
    }
}

$producto = new Producto('Tablet', 500, true);
$producto->mostrarProducto();

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor', 800, false);
$producto2->mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';