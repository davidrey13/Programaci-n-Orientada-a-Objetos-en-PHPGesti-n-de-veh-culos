<?php
require_once 'Vehiculo.php';
require_once 'Coche.php';
require_once 'Moto.php';
require_once 'Camion.php';
require_once 'Bicicleta.php';
require_once 'VehiculoElectrico.php';
require_once 'Tesla.php';
require_once 'Concesionario.php';

$coche = new Coche("Ford", "Fiesta", 4);
$moto = new Moto("Honda", "CBR", 150);
$camion = new Camion("Volvo", "FH", 12.5);
$tesla = new Tesla("Tesla", "Model S", 80);
$bicicleta = new Bicicleta();

$concesionario = new Concesionario();

echo "<h2>Información de los vehículos:</h2>";

$concesionario->mostrarVehiculo($coche);
echo "<br>";
$concesionario->mostrarVehiculo($moto);
echo "<br>";
$concesionario->mostrarVehiculo($camion);
echo "<br>";
$concesionario->mostrarVehiculo($tesla);

echo "<h2>Ejemplo de métodos de vehículos:</h2>";
$coche->mover();
echo "<br>";
$moto->detener();
echo "<br>";
$camion->mover();
echo "<br>";
$tesla->cargarBateria();
echo $tesla->estadoBateria() . "<br>";

echo "<h2>Ejemplo de bicicleta:</h2>";
$bicicleta->pedalear();

echo "<h2>Modificación de atributos:</h2>";
$coche->setNumeroPuertas(5);
echo $coche->obtenerInformacion(); // Muestra la información actualizada
?>
