<?php

declare(strict_types=1);
include_once("006EmpleadoStatic.php");

$trabajador1 = new Empleado("Laura", "Valiente Cruz", 4000);

$trabajador1->anyadirTelefono(666666);
$trabajador1->anyadirTelefono(6666666);

echo Empleado::toHtml($trabajador1);
