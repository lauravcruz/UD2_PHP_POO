<?php

declare(strict_types=1);

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

    //He pasado esta función a la clase padre por una cuestión de orden: usa atributos de aquí
    public function getNombreCompleto(): string
    {
        return $this->nombre . $this->apellidos;
    }
}
