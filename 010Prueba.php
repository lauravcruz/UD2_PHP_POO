<?php

declare(strict_types=1);
include_once("010Empleado.php");
include_once("010PersonaS.php");

$trabajador1 = new Empleado("Laura", "Valiente Cruz", 28, 4000);

$trabajador1->anyadirTelefono(666666);
$trabajador1->anyadirTelefono(6666666);

echo $trabajador1->__toString();
