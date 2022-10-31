<?php
declare(strict_types=1);

include_once("012Persona.php");
include_once("012Trabajador.php");
include_once("012Gerente.php");
class Empresa 
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
        $this->nombre = $direccion;

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

            foreach($this->trabajadores as $t){
                $trabajadoresHTML .= Trabajador::toHtml($t); 
            }

            return $trabajadoresHTML; 
        } else {
            return "No hay trabajadores registrados";
        }
    }

    public function getCosteNominas(): float
    {
        $nominas = 0;
        foreach ($this->trabajadores as $t) {
            $nominas += $t->calcularSueldo();
        }
        return $nominas;
    }
}
