<?php
require_once 'vehiculo.php';

class Moto extends Vehiculo {
    private $plazas;
    private $sidecar;

    public function __construct($marca, $modelo, $cilindrada, $matricula, $plazas, $sidecar) {
        parent::__construct($marca, $modelo, $cilindrada, $matricula);
        $this->plazas = $plazas;
        $this->sidecar = $sidecar;
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
               'Plazas: ' . $this->plazas . '<br>' .
               'Sidecar: ' . ($this->sidecar ? 'Sí' : 'No');
    }

    public function frenarDelantero(): string {
        return 'La moto está frenando con el freno delantero.';
    }

    public function frenarTrasero(): string {
        return 'La moto está frenando con el freno trasero.';
    }
}
?>