<?php
class Vehiculo {
    protected $marca;
    protected $modelo;
    protected $cilindrada;
    protected $matricula;

    public function __construct($marca, $modelo, $cilindrada, $matricula) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cilindrada = $cilindrada;
        $this->matricula = $matricula;
    }

    public function __get(string $property): mixed {
        return $this->$property;
    }

    public function __set(string $property, mixed $value): void {
        $this->$property = $value;
    }

    public function __toString(): string {
        return 'Marca: ' . $this->marca . '<br>' .
               'Modelo: ' . $this->modelo . '<br>' .
               'Cilindrada: ' . $this->cilindrada . '<br>' .
               'Matrícula: ' . $this->matricula;
    }
}
?>