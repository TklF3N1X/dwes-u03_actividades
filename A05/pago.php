<?php
class Pago {
    protected $importe;

    public function __construct($importe) {
        $this->importe = $importe;
    }

    public function getImporte() {
        return $this->importe;
    }

    public function setImporte($importe): void {
        $this->importe = $importe;
    }

    public function toString(): string {
        return 'Importe: ' . $this->importe . ' €';
    }
}
?>