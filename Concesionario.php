<?php
class concesionario {
    public function mostrarVehiculo(vehiculo $vehiculo): void {
        echo "Información del vehículo:\n";
        echo $vehiculo->obtenerInformacion() . "\n";
    }
}
