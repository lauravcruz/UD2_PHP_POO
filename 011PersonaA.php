<?php

declare(strict_types=1);

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
