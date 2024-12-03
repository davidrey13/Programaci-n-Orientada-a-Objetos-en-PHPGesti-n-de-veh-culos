<?php
class Moto extends Vehiculo {
    private int $cilindrada;

    public function __construct(string $marca, string $modelo, int $cilindrada, string $color = "Negro") {
        parent::__construct($marca, $modelo, $color);
        $this->cilindrada = $cilindrada;
    }

    public function getCilindrada(): int {
        return $this->cilindrada;
    }

    public function setCilindrada(int $cilindrada): void {
        $this->cilindrada = $cilindrada;
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Cilindrada: {$this->cilindrada}cc";
    }

    public function mover(): void {
        echo "La moto está moviéndose.\n";
    }

    public function detener(): void {
        echo "La moto se ha detenido.\n";
    }
}
?>
