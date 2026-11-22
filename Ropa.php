<?php
require_once 'Producto.php';
require_once 'Descontable.php';
// Subclase Ropa: hereda de Producto e implementa la interfaz Descontable
class Ropa extends Producto implements Descontable {
  private strings $talla;
  public function __construct(string $id, string $nombre, float $precioBase, int $stock, string $talla) {
    parent::__construct($id, $nombre, $precioBase, $stock);
    $this->talla = $talla;
  }
  //Calcula el precio aplicando un porcentaje de descuento
public function aplicarDescuento(float $porcentaje): float {
  return $this->precioBase - ($this->precioBase * ($porcentaje / 100));
}
  // Implementacion polimorfica: aplica un 15% de temporada en ropa
public function calcularPrecioFinal(): float {
  return $this->aplicarDescuento(15);
}
  // Muestra los detalles de la prenda incluyendo talla y precio final
public function mostrarDetalles(): string {
  return "[Ropa] {$this->nombre} | Talla: {$this->talla} | Precio final: $" . number_format($this->calcularPrecioFinal(), 2) . " | stock: {$this->stock}";
}
}
