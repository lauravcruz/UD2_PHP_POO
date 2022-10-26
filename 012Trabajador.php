<?php
declare(strict_types=1);
include_once("012Persona.php");
abstract class Trabajador extends Persona{
    private $telefonos = [];
    private static $SUELDO_TOPE = 3333; 

    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string
    {
        if (!empty($this->telefonos)) {
            //Implode imprime los valores de un array. En el primer parámetro indicamos el separador
            return implode(", ", $this->telefonos);
        } else {
            return "No hay teléfonos guardados";
        }
    }

    public function vaciarTelefonos(): void
    {
        unset($this->telefonos);
    }

    public function getTelefono(): array
    {
        return $this->telefonos;
    }

    public function debePagarImpuestos(): bool
    {
        if (parent::getEdad() > 21) {
            if ($this->calcularSueldo() > self::$SUELDO_TOPE) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    abstract public function calcularSueldo();
}