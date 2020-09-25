<?php
require_once("class.persona.php");
class Alumno extends Persona{
    public array $materias=["Matemáticas"=>0,"Física"=>0,"Filosofía=>0"];
    public function __construct($paramNombre,$paramFechaNacimiento,$sexo='m'){
        parent::__construct($paramNombre,$paramFechaNacimiento,$sexo);
        $this->disponibilidad=$this->estaDisponible();
        $this->cargarNota();
        
    }

    public function cargarNota(){
        foreach($this->materias as $key=>$value)
            $this->materias[$key]=rand(1,10);
    }

    public function __toString(): string{
        $disponibilidad = $this->disponibilidad?"Presente":"No presente";
        return parent::__toString()."<div>Asitencia: $disponibilidad</div>";
    }

    protected function estaDisponible():bool{
        return rand(1,10)>=5;
    }


}