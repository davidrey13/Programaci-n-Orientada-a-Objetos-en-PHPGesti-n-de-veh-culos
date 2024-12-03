<?php
class Coche extends Vehiculo {
    private int $numeroPuertas;

    public function __construct(string $marca, string $modelo, int $numeroPuertas, string $color = "Negro") {
        parent::__construct($marca, $modelo, $color);
        $this->numeroPuertas = $numeroPuertas;
    }

    public function getNumeroPuertas(): int {
        return $this->numeroPuertas;
    }

    public function setNumeroPuertas(int $numeroPuertas): void {
        $this->numeroPuertas = $numeroPuertas;
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Puertas: {$this->numeroPuertas}";
    }

    public function mover(): void {
        echo "El coche está moviéndose.\n";
    }

    public function detener(): void {
        echo "El coche se ha detenido.\n";
    }
}
?>


