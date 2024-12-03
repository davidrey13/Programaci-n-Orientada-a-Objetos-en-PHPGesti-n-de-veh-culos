<?php
class Tesla extends Vehiculo implements VehiculoElectrico {
    private int $nivelBateria;

    public function __construct(string $marca, string $modelo, int $nivelBateria, string $color = "Negro") {
        parent::__construct($marca, $modelo, $color);
        $this->nivelBateria = $nivelBateria;
    }

    public function getNivelBateria(): int {
        return $this->nivelBateria;
    }

    public function setNivelBateria(int $nivelBateria): void {
        $this->nivelBateria = $nivelBateria;
    }

    public function cargarBateria(): void {
        echo "Cargando la batería:\n";
        $this->nivelBateria = 100;
    }

    public function estadoBateria(): string {
        return "Batería al {$this->nivelBateria}%";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Nivel de batería: {$this->nivelBateria}%";
    }

    public function mover(): void {
        echo "El Tesla está moviéndose en modo eléctrico.\n";
    }

    public function detener(): void {
        echo "El Tesla se ha detenido.\n";
    }
}
?>
