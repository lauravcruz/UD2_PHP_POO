<?php

declare(strict_types=1);
include_once("001Empleado.php");

$trabajador1 = new Empleado();
$trabajador1->setNombre("Laura");
$trabajador1->setApellidos("Valiente Cruz");
$trabajador1->setSueldo(1000);
echo "<p>" . $trabajador1->getNombreCompleto() . ", sueldo: " . $trabajador1->getSueldo() . ", debe pagar impuestos: "  . intval($trabajador1->debePagarImpuestos() . "</p>");
$trabajador1->setSueldo(4000);
echo "<p>" . $trabajador1->getNombreCompleto() . ", sueldo: " . $trabajador1->getSueldo() . ", debe pagar impuestos: "  . intval($trabajador1->debePagarImpuestos() . "</p>");
