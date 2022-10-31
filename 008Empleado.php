<?php

declare(strict_types=1);
/*Copia las clases del ejercicio anterior y modifícalas. Crea en Persona 
el método estático toHtml(Persona $p), y modifica en Empleado el mismo método 
toHtml(Persona $p), pero cambia la firma para que reciba una Persona como 
parámetro. Para acceder a las propiedades del empleado con la persona que recibimos 
como parámetro, comprobaremos su tipo:*/
include_once("008PersonaH.php");
class Empleado extends Persona
{
    private $telefonos = [];
    public static $SUELDO_TOPE = 3333;

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
            return  implode(", ", $this->telefonos);
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
        //Para comprobar el tipo se usa: 
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
