<?php

declare(strict_types=1);

/*Copia la clase del ejercicio anterior y modifícala. Añade 
una propiedad privada que almacene un array de números de teléfonos. Añade los 
siguientes métodos:
public function anyadirTelefono(int $telefono) : void → Añade un teléfono al array
public function listarTelefonoss(): string → Muestra los teléfonos separados por comas
public function vaciarTelefonos(): void → Elimina todos los teléfonos*/

class Empleado
{
    private String $nombre;
    private String $apellidos;
    private float $sueldo;
    private $telefonos = [];

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . $this->apellidos;
    }

    public function debePagarImpuestos(): bool
    {
        if ($this->sueldo > 3333) {
            return true;
        } else {
            return false;
        }
    }

    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string
    {        
        if(!empty($this->telefonos)){
            //Implode imprime los valores de un array. En el primer parámetro indicamos el separador
            return implode(", ", $this->telefonos);
        }else{
            return "No hay teléfonos guardados"; 
        }
    }

    public function vaciarTelefonos(): void
    {
        unset($this->telefonos);
    }
}

/*
$trabajador1 = new EmpleadoTelefono();

$trabajador1->setNombre("Laura");
$trabajador1->setApellidos("Valiente Cruz");
$trabajador1->setSueldo(5555);
$trabajador1->anyadirTelefono(654227390);
$trabajador1->anyadirTelefono(29011112);

echo $trabajador1->listarTelefonos();
$trabajador1->vaciarTelefonos();
echo $trabajador1->listarTelefonos();
*/
