<?php

declare(strict_types=1);
include_once("002EmpleadoTelefonos.php");

$trabajador1 = new EmpleadoTelefono();
$trabajador1->setNombre("Laura");
$trabajador1->setApellidos("Valiente Cruz");
$trabajador1->setSueldo(5555);
$trabajador1->anyadirTelefono(66666666);
$trabajador1->anyadirTelefono(6666666);
echo $trabajador1->listarTelefonos();
echo "<br>vaciar teléfonos: <br>";
$trabajador1->vaciarTelefonos();
echo $trabajador1->listarTelefonos();
