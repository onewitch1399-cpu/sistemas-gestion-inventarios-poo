<?php
require_once 'Producto.php';
require_once 'Descontable.php';
// Subclase Alimento: hereda de Producto e implementa la interfaz Descontable
class Alimento extends Producto implements Descontable {
  private string $fechaCaducidad;
  public function __construct($id, $nombre, $precioBase, $stock);
  $this->fechaCaducidad = $fechaCaducidad;
}
// Calcula el precio aplicando un porcentaje de descuento
public function aplicarDescuento(float $porcentaje): float {
  return $this->precioBase - ($this->precioBase * ($porcentaje / 100));
}
// Implementacion polimorfica: aplica un 5% de promocion en alimentos
public function calcularPrecioFinal(): float {
  return $this->aplicarDescuanto(5);
}
// Muestra los detalles del alimento incluyendo fecha de caducidad y precio final
public function mostrarDetalles(): string {
  return "[Alimento] {$this->nombre} | Caduca: {$this->fechaCaducidad} | Precio final: $" . number_format($this->calcularPrecioFinal(), 2) . " | Stock: {$this->stock}";
}
}
  
