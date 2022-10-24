<?php

declare(strict_types=1);
/*Copia las clases del ejercicio anterior y modifícalas. Crea en Persona 
el método estático toHtml(Persona $p), y modifica en Empleado el mismo método 
toHtml(Persona $p), pero cambia la firma para que reciba una Persona como 
parámetro. Para acceder a las propiedades del empleado con la persona que recibimos 
como parámetro, comprobaremos su tipo:*/

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

    public static function toHtml(Persona $p){
        return "<p>" . $p->getNombreCompleto() . "</p>";
    } 
}
