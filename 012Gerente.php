<?php

declare(strict_types=1);
/*Copia las clases del ejercicio anterior y modifícalas.
Cambia la estructura de clases conforme al gráfico respetando todos los métodos que 
ya están hechos. Trabajador es una clase abstracta que ahora almacena los teléfonos y 
donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por 
hora. Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: 
salario + salario*edad/100*/
include_once("012Trabajador.php");
include_once("012Empleado.php");
class Gerente extends Trabajador
{

    private float $salario;

    public static $SUELDO_TOPE = 3333;

    public function __construct(
        String $nombre,
        String $apellidos,
        int $edad,
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
        //SALARIO NO HACE FALTA SE QUEDA POR DEFECTO EL SUELDO BASE
        return $this-> *= $this->edad / 100;
    }

    
    public static function toHtml(Persona $p): string
    {

        if ($p instanceof Empleado) {
            $telefonos = $p->getTelefono();
            $numeros = "";

            //Recorremos los números de teléfono y los vamos guardando en una cadena con su <li>
            foreach ($telefonos as $numero) {
                $numeros .= "<li>$numero</li>";
            }
            return "<p>" . $p->getNombreCompleto() . "</p><p>Sueldo: " . $p->calcularSueldo() .  "</p>
            <ol>" . $numeros  . "</ol>";
        } else {
            //Añado esta línea porque me aparecía el error. El else tenía que retornar algo
            return "<p>" . $p->getNombreCompleto() . "</p>";
        }
    }

    public function  __toString(): string
    {
        return parent::__toString() .  " Sueldo: " . $this->calcularSueldo() . "Teléfonos: " . $this->listarTelefonos();
    }
    
}

/*
$trabajador1 = new Empleado("Laura", "Valiente Cruz", 28, 4000);

$trabajador1->anyadirTelefono(654227390);
$trabajador1->anyadirTelefono(29011112);

echo Empleado::toHtml($trabajador1);^*/
