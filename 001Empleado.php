<?php
declare(strict_types=1);
/*Crea una clase Empleado con su nombre, apellidos y sueldo. 
Encapsula las propiedades mediante getters/setters y añade métodos para:
Obtener su nombre completo → getNombreCompleto(): string
Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando 
el sueldo es superior a 3333€) → debePagarImpuestos(): bool*/

class Empleado
{
    private String $nombre;
    private String $apellidos;
    private float $sueldo;

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
        return $this->nombre . " " . $this->apellidos;
    }

    public function debePagarImpuestos(): bool
    {
        if ($this->sueldo > 3333) {
            return true;
        } else {
            return false;
        }
    }
}

//PRUEBAS: 
// $trabajador1 = new Empleado(); 
// $trabajador1 -> setNombre("Laura");
// $trabajador1 ->setApellidos("Valiente Cruz"); 
// $trabajador1 ->setSueldo(1000);
// echo "<p>" . $trabajador1 -> getNombreCompleto() . ", sueldo: " . $trabajador1->getSueldo() . ", debe pagar impuestos: "  . intval($trabajador1->debePagarImpuestos() . "</p>");
// $trabajador1 ->setSueldo(4000);
// echo "<p>" . $trabajador1 -> getNombreCompleto() . ", sueldo: " . $trabajador1->getSueldo() . ", debe pagar impuestos: "  . intval($trabajador1->debePagarImpuestos() . "</p>");


