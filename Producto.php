<?php
// Clase abstracta base con atributos comunes y metodos abstractos para los productos
abstract class Producto {
  protected string $id;
  protected string $nombre;
  protected float $precioBase;
  protected int $stock;

public function __construct(string $id, string $nombre, float $precioBase, int $stock) {
  $this->id = $id;
  $this->nombre = $nombre;
  $this->precioBase = $precioBase;
  $this->stock = $stock;
}
public function getstock(): int {
  return $this->stock;
}
}
// Cada subclase definira como calcula su precio final y muestra sus detalles
abstract public function calcularPrecioFinal(): float;
abstract public function mostrarDetalles(): string;
}
