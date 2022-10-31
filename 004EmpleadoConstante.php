<?php

declare(strict_types=1);
/*Copia la clase del ejercicio anterior y modifícala. Añade 
una constante SUELDO_TOPE con el valor del sueldo que debe pagar impuestos, y 
modifica el código para utilizar la constante.*/

class Empleado
{

    private $telefonos = [];
    const SUELDO_TOPE = 3333;

    public function __construct(
        private String $nombre,
        private String $apellidos,
        private float $sueldo = 1000
    ) {
    }

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
        return $this-> nombre . " " . $this->apellidos;
    }

    public function debePagarImpuestos(): bool
    {
        //Para acceder a una constante se usa ::
        if ($this->sueldo > $this::SUELDO_TOPE) {
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
        if (!empty($this->telefonos)) {
            //Implode imprime los valores de un array. En el primer parámetro indicamos el separador
            return  implode(", ", $this->telefonos);
        } else {
            return "No hay teléfonos guardados";
        }
    }

    public function vaciarTelefonos(): void
    {
        unset($this->telefonos);
    }
}
