<?php
/* Copia las clases del ejercicio anterior y modifícalas.
Crea un interfaz JSerializable, de manera que ofrezca los métodos:
toJSON(): string → utiliza la función json_encode(mixed). Ten en cuenta que como 
tenemos las propiedades de los objetos privados, debes recorrer las propiedades y 
colocarlas en un mapa. Por ejemplo:

public function toJSON(): string {
    foreach ($this as $clave => $valor) {
        $mapa->$clave = $valor;
    }
    return json_encode($mapa);
}
toSerialize(): string → utiliza la función serialize(mixed)
Modifica todas las clases que no son abstractas para que implementen el interfaz 
creado.*/

include_once("012Persona.php");
include_once("012Trabajador.php");
include_once("012Gerente.php");
include_once("014Empresa.php");
include_once("014Empresal.php");

$empleado = new Empleado("Laura", "Valiente Cruz", 28);
$gerente = new Gerente("Dani", "El Gallo", 20);

$empleado->anyadirTelefono(666666);
$empleado->anyadirTelefono(666666);
$gerente->anyadirTelefono(6666666);
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
