<?php

declare(strict_types=1);
include_once("005EmpleadoSueldo.php");

$trabajador = new Empleado("Laura", "Valiente Cruz", 4000);
echo $trabajador->getNombreCompleto() . " " . $trabajador->getSueldo() . ", debe pagar: " . intval($trabajador->debePagarImpuestos());
$trabajador->setSueldoTope(2000);
echo "<br>Nuevo sueldo: " . $trabajador->getSueldoTope();
