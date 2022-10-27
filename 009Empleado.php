<?php

declare(strict_types=1);
/*Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando 
tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código 
necesario para mostrar y/o editar la edad cuando sea necesario.*/
include_once("009PersonaE.php");
class Empleado extends Persona
{
    private $telefonos = [];
    public static $SUELDO_TOPE = 3333;

    public function __construct(
        String $nombre,
        String $apellidos,
        int $edad,
        private float $sueldo = 1000
    ) {
        parent::__construct($nombre, $apellidos, $edad);
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
        if (parent::getEdad() > 21 && $this->sueldo > self::$SUELDO_TOPE) {
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
            return "Teléfonos: " . implode(", ", $this->telefonos);
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

    public static function toHtml(Persona $p): string
    {

        if ($p instanceof Empleado) {
            $telefonos = $p->getTelefono();
            $numeros = "";

            //Recorremos los números de teléfono y los vamos guardando en una cadena con su <li>
            foreach ($telefonos as $numero) {
                $numeros .= "<li>$numero</li>";
            }
            return "<p>" . parent::toHtml($p) . "</p><p>Sueldo: " . $p->sueldo .  "</p>
            <ol>" . $numeros  . "</ol>";
        } else {
            //Añado esta línea porque me aparecía el error. El else tenía que retornar algo
            return "<p>" . parent::toHtml($p) . "</p>";
        }
    }
}

//PRUEBAS:
// $trabajador1 = new Empleado("Laura", "Valiente Cruz", 25, 4000);

// $trabajador1->anyadirTelefono(666666);
// $trabajador1->anyadirTelefono(6666666);

// echo $trabajador1->toHtml($trabajador1) . intval($trabajador1->debePagarImpuestos());
// $trabajador2 = new Empleado("Laura", "Valiente Cruz", 20, 4000);
// echo $trabajador2->toHtml($trabajador2) . intval($trabajador2->debePagarImpuestos());