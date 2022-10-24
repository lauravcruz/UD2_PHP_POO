<?php

declare(strict_types=1);
/*Copia la clase del ejercicio anterior en 307Empleado.php y 
modifícala.Crea una clase Persona que sea padre de Empleado, de manera que 
Persona contenga el nombre y los apellidos, y en Empleado quede el salario y los 
teléfonos*/
include_once("007Persona.php");
class Empleado extends Persona
{
    private $telefonos = [];
    private static $SUELDO_TOPE = 3333;

    public function __construct(
        String $nombre,
        String $apellidos,
        private float $sueldo = 1000
    ) {
        parent::__construct($nombre, $apellidos);
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
        return $this;
    }

    public function getSueldoTope()
    {
        return self::$SUELDO_TOPE;
    }

    public function setSueldoTope($sueldoTope)
    {
        self::$SUELDO_TOPE = $sueldoTope;
        return $this;
    }

    public function debePagarImpuestos(): bool
    {
        //Para acceder a una propiedad estática del objeto: self::
        if ($this->sueldo > self::$SUELDO_TOPE) {
            return true;
        } else {
            return false;
        }
    }

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

    /* Esta función entra en conflicto con las del ejercicio 8
    public static function toHtml(Empleado $emp): string
    {
        $telefonos = $emp->getTelefono();
        $numeros = "";

        //Recorremos los números de teléfono y los vamos guardando en una cadena con su <li>
        foreach ($telefonos as $numero) {
            $numeros .= "<li>$numero</li>";
        }
        return "<p>" . $emp->getNombreCompleto() . ". Sueldo: " . $emp->sueldo .  "</p>
        <ul>" . $numeros  . "</ul>";
    }*/
}
