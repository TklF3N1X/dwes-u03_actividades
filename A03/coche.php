<?php
require_once 'vehiculo.php';

class Coche extends Vehiculo {
    private $plazas;
    private $descapotable;

    public function __construct($marca, $modelo, $cilindrada, $matricula, $plazas, $descapotable) {
        parent::__construct($marca, $modelo, $cilindrada, $matricula);
        $this->plazas = $plazas;
        $this->descapotable = $descapotable;
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
               'Descapotable: ' . ($this->descapotable ? 'Sí' : 'No');
    }

    public function quitarCapota(): string {
        return 'Se ha quitado la capota del coche.';
    }
}
?>