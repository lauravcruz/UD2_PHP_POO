<?php

declare(strict_types=1);
/*Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando 
tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código 
necesario para mostrar y/o editar la edad cuando sea necesario.*/

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

    public static function toHtml(Persona $p)
    {
        return "<p>" . $p->getNombreCompleto() . "</p>";
    }
}
