<?php

declare(strict_types=1);
include_once("008PersonaH.php");
include_once("008Empleado.php");

$trabajador1 = new Empleado("Laura", "Valiente Cruz", 4000);

$trabajador1->anyadirTelefono(666666);
$trabajador1->anyadirTelefono(6666666);

echo $trabajador1->toHtml($trabajador1);