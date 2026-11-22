<?php
// Interfaz que define el contrato para productos que admiten calculo de descuento
interface Descontable {
  public function aplicarDescuento(float $porcentaje): float;
