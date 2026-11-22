<?php
require_once 'Electronico.php';
require_once 'Alimento.php';
require_once 'Ropa.php';
//Instanciamos objetos de distintas subclases dentro de un mismo arreglo
$inventario = [
  new Electronico("E01", "Audifonos Inalambricos", 1200.00, 15, 12),
  new Alimento("A01", "Cafe Organico Molido", 240.00, 30, "2027-05-15"),
  new Ropa("R01", "Sudadera Basica", 650.00, 20, "M")
  ];
echo "<h2>Sistema de Gestion de Inventarios (Polimorfismo en POO)</h2>";
echo "<ul>";
//Polimorfismo: llamamos al mismo metodo mostrarDetalles() y cada objeto ejecuta su propia version
foreach ($inventario as $producto) {
  echo "<li>" . $producto->mostrarDetalles() . "</li>";
}
echo "</ul>";
