<?php

declare(strict_types=1);
include_once("003EmpleadoConstructor.php");

$trabajador = new Empleado("Laura", "Valiente Cruz", 2000);

echo $trabajador->getNombreCompleto() . ", sueldo: " . $trabajador->getSueldo();

$trabajador2 = new Empleado("Dani", "El gallo");

echo "<br>" . $trabajador2->getNombreCompleto() . ", sueldo: " . $trabajador2->getSueldo();
