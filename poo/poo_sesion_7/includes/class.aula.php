<?php
class Aula{
    public int $num;
    public int $numMax=5;
    public string $materia;
    public ?Profesor $profesor=null;

    public ?array $alumnos=null;

    public function __construct($num,$materia){
        $this->num = $num;
        $this->materia=$materia;
    }

    public function setAlumnos(?array $alumnos):void{
        $this->alumnos = $alumnos;
    }

    public function setProfesor(Profesor $profesor){
        $this->profesor = $profesor;
    }

    public function asistencia():bool{
        $total=0;
        if($this->alumnos)
            foreach($this->alumnos as $a)
                if($a->disponibilidad)
                    $total++;
        return $total>=($this->numMax/2);
    }


    public function dimeListadoAlumnos():void{
        if($this->alumnos)
            foreach($this->alumnos as $a)
                echo $a,"Nota $this->materia:",$a->materias[$this->materia];
    }


    public function __toString(){
        $profe=$this->profesor?$this->profesor:'';
        $claseBool = ($this->profesor && $this->profesor->disponibilidad && $this->profesor->materia===$this->materia && $this->asistencia())?"Sí":"NO";
        return "<ul>
                    <li>Número: $this->num</li>
                    <li>Número de Plazas máxima:$this->numMax</li>
                    <li>Materia: $this->materia</li>
                    <li>Profesor: $profe
                    </li>
                    <li>Clase: $claseBool</li>
                <ul>";
        
    }
}