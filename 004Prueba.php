<?php

declare(strict_types=1);
include_once("004EmpleadoConstante.php");

$trabajador = new Empleado("Laura", "Valiente Cruz", 3334);

echo strval($trabajador->debePagarImpuestos());
