<?php

declare(strict_types=1);
include_once("009Empleado.php");
include_once("009PersonaE.php");

$trabajador1 = new Empleado("Laura", "Valiente Cruz", 25, 4000);

$trabajador1->anyadirTelefono(666666);
$trabajador1->anyadirTelefono(6666666);

echo "Edad: " . $trabajador1->getEdad() . " ¿Paga impuestos? " . intval($trabajador1->debePagarImpuestos());
$trabajador2 = new Empleado("Dani", "El Gallo", 20, 4000);
echo "<br>Edad: " . $trabajador2->getEdad() . " ¿Paga impuestos? " . intval($trabajador2->debePagarImpuestos());