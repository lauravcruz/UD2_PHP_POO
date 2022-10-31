<?php

/* Copia las clases del ejercicio anterior y modifícalas.
Cambia la estructura de clases conforme al gráfico respetando todos los métodos que 
ya están hechos. Trabajador es una clase abstracta que ahora almacena los teléfonos y 
donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por 
hora. Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: 
salario + salario*edad/100*/

include_once("012Persona.php");
include_once("012Trabajador.php");
include_once("012Gerente.php");

$empleado = new Empleado("Laura", "Valiente Cruz", 28);
$gerente = new Gerente("Dani", "El Gallo", 20);

$empleado->anyadirTelefono(666666);
$gerente->anyadirTelefono(6666666);

$empleado->setHorasTrabajadas(8);
$empleado->setPrecioPorHoras(10);

echo "<p>GERENTE: " . $gerente->__toString() . "</p>";
echo "<p>EMPLEADO: " . $empleado->__toString() . "</p>";