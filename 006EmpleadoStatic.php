<?php

declare(strict_types=1);
/*Copia la clase del ejercicio anterior y modifícala. Completa el 
siguiente método con una cadena HTML que muestre los datos de un empleado 
dentro de un párrafo y todos los teléfonos mediante una lista ordenada (para ello, 
deberás crear un getter para los teléfonos): public static function toHtml(Empleado $emp): string*/

class Empleado
{
    private $telefonos = [];
    private static $SUELDO_TOPE = 3333;

    public function __construct(
        private String $nombre,
        private String $apellidos,
        private float $sueldo = 1000
    ) {
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
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

    public function getNombreCompleto(): string
    {
        return $this->nombre . $this->apellidos;
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

    public static function toHtml(Empleado $emp): string{
        $telefonos = $emp->getTelefono();
        $numeros = ""; 

        //Recorremos los números de teléfono y los vamos guardando en una cadena con su <li>
        foreach($telefonos as $numero){
            $numeros .= "<li>$numero</li>";
        }
        return "<p>" . $emp->getNombreCompleto() . ". Sueldo: " . $emp->sueldo .  "</p>
        <ol>" . $numeros  . "</ol>" ;
    }
}



$trabajador1 = new Empleado("Laura", "Valiente Cruz", 4000); 

$trabajador1->anyadirTelefono(654227390);
$trabajador1->anyadirTelefono(29011112);

echo Empleado::toHtml($trabajador1); 

