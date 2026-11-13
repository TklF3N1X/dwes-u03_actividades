<?php
require_once 'vehiculo.php';

class Camion extends Vehiculo {
    private $tara;
    private $carga;
    private $ejes;

    public function __construct($marca, $modelo, $cilindrada, $matricula, $tara, $carga, $ejes) {
        parent::__construct($marca, $modelo, $cilindrada, $matricula);
        $this->tara = $tara;
        $this->carga = $carga;
        $this->ejes = $ejes;
    }

    public function __get(string $property): mixed {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }

    public function __set(string $property, mixed $value): void {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __toString(): string {
        return parent::__toString() . '<br>' .
               'Tara: ' . $this->tara . '<br>' .
               'Carga: ' . $this->carga . '<br>' .
               'Ejes: ' . $this->ejes;
    }
}
?>