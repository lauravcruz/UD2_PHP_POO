<?php

declare(strict_types=1);
/*013Empresa.php: Utilizando las clases de los ejercicios anteriores:
Crea una clase Empresa que además del nombre y la dirección, contenga una 
propiedad con un array de Trabajadores, ya sean Empleados o Gerentes.
Añade getters/setters para el nombre y dirección.
Añade métodos para añadir y listar los trabajadores.
public function anyadirTrabajador(Trabajador $t)
public function listarTrabajadoresHtml() : string -> utiliza Trabajador::toHtml(Persona 
$p)
Añade un método para obtener el coste total en nóminas.
public function getCosteNominas(): float -> recorre los trabajadores e invoca al 
método calcularSueldo().*/
include_once("012Persona.php");
include_once("012Trabajador.php");
include_once("012Gerente.php");
include_once("014Empresal.php");
class Empresa implements JSerializable
{
    private String $nombre;
    private String $direccion;
    private $trabajadores = [];

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function anyadirTrabajador(Trabajador $t): void
    {
        $this->trabajadores[] = $t;
    }

    public function listarTrabajadoresHtml(): string
    {
        $trabajadoresHTML = "";
        if (!empty($this->trabajadores)) {

            foreach ($this->trabajadores as $t) {
                $trabajadoresHTML .= Trabajador::toHtml($t);
            }

            return $trabajadoresHTML;
        } else {
            return "No hay trabajadores registrados";
        }
    }

    public function getTrabajadores()
    {
        return $this->trabajadores;
    }

    public function setTrabajadores($trabajadores)
    {
        $this->trabajadores = $trabajadores;

        return $this;
    }

    public function getCosteNominas(): float
    {
        $nominas = 0;
        foreach ($this->trabajadores as $t) {
            $nominas += $t->calcularSueldo();
        }
        return $nominas;
    }

    public function toJSON(): string
    {
        foreach ($this as $key => $value) {
            if (is_array($value)) {
                $map[$key] = implode("<br> ", $value);
            } else {
                $map[$key] = $value;
            }
        }

        return json_encode($map);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}
