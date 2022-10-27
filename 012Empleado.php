<?php

declare(strict_types=1);
/*Copia las clases del ejercicio anterior y modifícalas.
Cambia la estructura de clases conforme al gráfico respetando todos los métodos que 
ya están hechos. Trabajador es una clase abstracta que ahora almacena los teléfonos y 
donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por 
hora. Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: 
salario + salario*edad/100*/

class Empleado extends Trabajador
{
    private float $horasTrabajadas;
    private float $precioPorHora;
    public static $SUELDO_TOPE = 3333;

    public function __construct(
        String $nombre,
        String $apellidos,
        int $edad,
    ) {
        parent::__construct($nombre, $apellidos, $edad);
    }

    public function getHorasTrabajadas()
    {
        return $this->horasTrabajadas;
    }

    public function setHorasTrabajadas($horasTrabajadas)
    {
        $this->horasTrabajadas = $horasTrabajadas;
        return $this;
    }

    public function getPrecioPorHora()
    {
        return $this->precioPorHora;
    }

    public function setPrecioPorHoras($precioPorHora)
    {
        $this->precioPorHora = $precioPorHora;
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


    public function calcularSueldo(): float
    {
        return $this->horasTrabajadas * $this->precioPorHora;
    }

    public function  __toString(): string
    {
        return parent::__toString() .  " Sueldo: " . $this->calcularSueldo() . "Teléfonos: " . $this->listarTelefonos();
    }
    
}



