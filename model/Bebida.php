<?php
// Clase Bebida que hereda de Artículo
class Bebida extends Articulo {
    public $tamano;
    public $temperatura; 

    public function __construct($nombre, $precio, $disponibilidad, $categoria, $tamano, $temperatura) {
        parent::__construct($nombre, $precio, $disponibilidad, $categoria);
        $this->tamano = $tamano;
        $this->temperatura = $temperatura;
    }
}