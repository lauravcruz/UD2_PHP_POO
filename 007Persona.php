<?php

declare(strict_types=1);
/*Copia la clase del ejercicio anterior en 307Empleado.php y 
modifícala.Crea una clase Persona que sea padre de Empleado, de manera que 
Persona contenga el nombre y los apellidos, y en Empleado quede el salario y los 
teléfonos*/

class Persona
{
    public function __construct(
        protected String $nombre,
        protected String $apellidos,
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

    public function getNombreCompleto(): string
    {
        return $this->nombre . $this->apellidos;
    }
}
