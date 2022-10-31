<?php

declare(strict_types=1);
/*Copia las clases del ejercicio anterior y modifícalas.
Cambia la estructura de clases conforme al gráfico respetando todos los métodos que 
ya están hechos. Trabajador es una clase abstracta que ahora almacena los teléfonos y 
donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por 
hora. Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: 
salario + salario*edad/100 */
include_once("012Trabajador.php");
include_once("012Empleado.php");
class Gerente extends Trabajador
{
    public static $SUELDO_TOPE = 3333;

    public function __construct(
        String $nombre,
        String $apellidos,
        int $edad,
        private float $salario = 1000
    ) {
        parent::__construct($nombre, $apellidos, $edad);
    }


    public function setSueldoTope($sueldoTope)
    {
        self::$SUELDO_TOPE = $sueldoTope;
        return $this;
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

    public function calcularSueldo(): float
    {
        return $this->salario + $this->salario * $this->edad / 100;
    }

    public function  __toString(): string
    {
        return parent::__toString() .  " Sueldo: " . $this->calcularSueldo() . " Teléfonos: " .  $this->listarTelefonos();
    }
}
