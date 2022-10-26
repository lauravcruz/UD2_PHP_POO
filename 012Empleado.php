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
include_once("012Gerente.php");
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


$empleado = new Empleado("Laura", "Valiente Cruz", 28);
$gerente= new Gerente("Dani", "El Gallo", 28);

$empleado->anyadirTelefono(654227390);
$gerente->anyadirTelefono(29011112);

echo $gerente->__toString(); 
echo $empleado->__toString();

