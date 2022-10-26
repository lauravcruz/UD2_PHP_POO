<?php

declare(strict_types=1);
/* Copia las clases del ejercicio anterior y modifícalas.
Transforma Persona a una clase abstracta donde su método estático toHtml(Persona 
$p) tenga que ser redefinido en todos sus hijos.*/

abstract class Persona
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
        return $this->nombre . " " . $this->apellidos;
    }

    abstract public static function toHtml(Persona $p): string; 

    public function __toString(): string
    {
        return $this->nombre . " " . $this->apellidos . " Edad: " . $this->edad;
    }
}
