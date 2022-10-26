<?php

declare(strict_types=1);
/* Copia las clases del ejercicio anterior y modifícalas.
Añade nuevos métodos que hagan una representación de todas las propiedades de las 
clases Persona y Empleado, de forma similar a los realizados en HTML, pero sin que 
sean estáticos, de manera que obtenga los datos mediante $this.*/

class Persona
{
    public function __construct(
        protected String $nombre,
        protected String $apellidos,
        protected int $edad
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
    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . $this->apellidos;
    }

    public static function toHtml(Persona $p): string
    {
        return "<p>" . $p->getNombreCompleto() . "</p>";
    }

    public function __toString(): string
    {
        return $this->nombre . " " . $this->apellidos . " Edad: " . $this->edad;
    }
}
