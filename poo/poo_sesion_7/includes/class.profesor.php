<?php
require_once('class.persona.php');
class Profesor extends Persona{
    
    public string $materia ='Matemáticas';
    public function __construct($paramNombre,$paramFechaNacimiento,$sexo,$materia){
        parent::__construct($paramNombre,$paramFechaNacimiento,$sexo);
        $this->materia=$materia;
        $this->disponibilidad=$this->estaDisponible();
    }
    
    public function __toString(): string{
        $disponibilidad = $this->disponibilidad?"Disponible":"No disponible";
        return parent::__toString()."<div>Materia: $this->materia</div><div>Disponibilidad: $disponibilidad</div>";
    }

    protected function estaDisponible():bool{
        return rand(1,10)>=5;
    }


}