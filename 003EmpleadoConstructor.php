<?php
declare(strict_types=1);
/*Copia la clase del ejercicio anterior y modifícala. 
Elimina los setters de nombre y apellidos, de manera que dichos datos se asignan 
mediante el constructor (utiliza la sintaxis de PHP8). Si el constructor recibe un tercer 
parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo 
inicial.*/

class Empleado
{

    private $telefonos = [];

    public function __construct(
       private String $nombre,
       private String $apellidos,
       private float $sueldo = 1000
    ){}

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
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
$trabajador = new Empleado("Laura", "Valiente Cruz", 2000); 

echo $trabajador->getNombreCompleto() . $trabajador->getSueldo();
