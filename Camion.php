<?php
class Camion extends Vehiculo {
    private float $capacidadCarga;

    public function __construct(string $marca, string $modelo, float $capacidadCarga, string $color = "Negro") {
        parent::__construct($marca, $modelo, $color);
        $this->capacidadCarga = $capacidadCarga;
    }

    public function getCapacidadCarga(): float {
        return $this->capacidadCarga;
    }

    public function setCapacidadCarga(float $capacidadCarga): void {
        $this->capacidadCarga = $capacidadCarga;
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Capacidad de Carga: {$this->capacidadCarga} toneladas";
    }

    public function mover(): void {
        echo "El camión está moviéndose.\n";
    }

    public function detener(): void {
        echo "El camión se ha detenido.\n";
    }
}
?>
