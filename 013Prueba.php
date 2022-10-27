<?php
include_once("013Empresa.php"); 

$empleado = new Empleado("Laura", "Valiente Cruz", 28);
$gerente = new Gerente("Dani", "El Gallo", 20);

$empleado->anyadirTelefono(666666);
$gerente->anyadirTelefono(6666666);

$empleado->setHorasTrabajadas(8);
$empleado->setPrecioPorHoras(10);

$empresa = new Empresa(); 

$empresa->setNombre("Ilerna"); 
$empresa->setNombre("Avenida de la Innovación");
$empresa->anyadirTrabajador($empleado);
$empresa->anyadirTrabajador($gerente);

echo $empresa->listarTrabajadoresHtml();
echo $empresa->getCosteNominas();
