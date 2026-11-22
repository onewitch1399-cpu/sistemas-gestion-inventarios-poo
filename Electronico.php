<?php
require_once 'Producto.php';
require_once 'Descontable.php';
//Subclase Electronico: hereda de Producto e implementa la interfaz Descontable
class Electronico extends Producto implements Descontable{
  private int $mesesGarantia;
  
  public function __construct(string $id, string $nombre, float $precioBase, int $stock, int $mesesGarantia) {
    parent::__construct($id, $nombre, $precioBase, $stock);
  $this->mesesGarantia = $mesesGarantia;
}
// Calcula el precio aplicando un porcentaje de descuento
public function aplicarDescuento(float $porcentaje): float {
  return $this->precioBase - ($this->precioBase * ($porcentaje / 100));
}
// Implementacion polimorfica: aplica un 10% de descuento base a electronicos
public function calcularPrecioFinal(): float {
  return $this->aplicarDescuanto(10);
}
// Muestra los detalles del producto electronico incluyendo garantia y precio final
public function mostrarDetalles(): string {
  return "[Electronico] {$this->nombre} | Garantia {$this->mesesGarantia} meses | precio final: $" . number_format($this->calcularPrecioFinal(), 2) . " | Stock: {$this->stock}";
}
}
