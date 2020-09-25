<?php
abstract class Persona{
    public string $nombre='';
    public ?DateTime $fechaNacimiento=null;
    public string $sexo = 'm';
    public bool $disponibilidad;

    public function __construct($paramNombre,$paramFechaNacimiento,$sexo='m'){
        $this->nombre = $paramNombre;
        $this->fechaNacimiento=$paramFechaNacimiento;
        $this->sexo = $sexo;
    }

    function dimeEdad():?int{
        return $this->fechaNacimiento?(int) $this->fechaNacimiento->diff(new DateTime('now'))->format("%y"):null;
    }


    public function __toString():string{
        $sex=$this->sexo==='m'?'Mujer':'Hombre';
        return "<div>Nombre: $this->nombre</div>
                <div>Edad:{$this->dimeEdad()}</div>
                <div>Sexo:$sex</div>";
    }

    protected abstract function estaDisponible():bool;
}