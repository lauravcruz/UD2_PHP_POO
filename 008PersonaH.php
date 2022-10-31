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

    public function getNombreCompleto(): string
    {
        return $this-> nombre . " " . $this->apellidos;
    }

    public static function toHtml(Persona $p): string
    {
        return "<p>" . $p->getNombreCompleto() . "</p>";
    }
}
