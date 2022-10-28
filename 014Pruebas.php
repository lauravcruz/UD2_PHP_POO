<?php
include_once("012Persona.php");
include_once("012Trabajador.php");
include_once("012Gerente.php");
include_once("014Empresa.php");
include_once("014Empresal.php");

//PRUEBAS: 
$empleado = new Empleado("Laura", "Valiente Cruz", 28);
$gerente = new Gerente("Dani", "El Gallo", 20);

$empleado->anyadirTelefono(666666);
$gerente->anyadirTelefono(6666666);

$empleado->setHorasTrabajadas(8);
$empleado->setPrecioPorHoras(10);

echo "<p>" . $gerente->__toString() . "</p>";
echo "<p>" . $empleado->__toString() . "</p>";

$empresa = new Empresa(); 

$empresa->setNombre("Ilerna"); 
$empresa->setDireccion("Avenida de la Innovacion");
$empresa->anyadirTrabajador($empleado);
$empresa->anyadirTrabajador($gerente);

echo $empresa->toJSON() . "<br><br>"; 
 
echo $empresa->toSerialize();
