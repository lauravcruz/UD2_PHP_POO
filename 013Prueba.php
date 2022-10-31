<?php
/*013Empresa.php: Utilizando las clases de los ejercicios anteriores:
Crea una clase Empresa que además del nombre y la dirección, contenga una 
propiedad con un array de Trabajadores, ya sean Empleados o Gerentes.
Añade getters/setters para el nombre y dirección.
Añade métodos para añadir y listar los trabajadores.
public function anyadirTrabajador(Trabajador $t)
public function listarTrabajadoresHtml() : string -> utiliza Trabajador::toHtml(Persona 
$p)
Añade un método para obtener el coste total en nóminas.
public function getCosteNominas(): float -> recorre los trabajadores e invoca al 
método calcularSueldo().*/

include_once("013Empresa.php"); 

$empleado = new Empleado("Laura", "Valiente Cruz", 28);
$gerente = new Gerente("Dani", "El Gallo", 20);

$empleado->anyadirTelefono(666666);
$empleado->anyadirTelefono(666666);
$gerente->anyadirTelefono(6666666);
$gerente->anyadirTelefono(6666666);

$empleado->setHorasTrabajadas(8);
$empleado->setPrecioPorHoras(10);

$empresa = new Empresa(); 

$empresa->setNombre("Ilerna"); 
$empresa->setNombre("Avenida de la Innovación");
$empresa->anyadirTrabajador($empleado);
$empresa->anyadirTrabajador($gerente);

echo "Listar trabajadores: " . $empresa->listarTrabajadoresHtml();
echo "Coste nóminas: " . $empresa->getCosteNominas();
