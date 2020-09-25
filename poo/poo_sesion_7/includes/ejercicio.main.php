<?php
declare(strict_types=1);
error_reporting(E_ALL);

foreach(glob("class*") as $file){
    require_once($file);
}


$profesores = [
                new Profesor("Xurxo",new DateTime("1973-04-06"),'h','Física'),
                new Profesor("Helena",new DateTime("1993-04-06"),'m','Matemáticas'),
                new Profesor("Carlos",new DateTime("1983-04-06"),'h','Física')
             ];

$alumnos = [
    new Alumno("Xurxo",new DateTime("2000-04-06"),'h'),
    new Alumno("Helena",new DateTime("2009-04-06")),
    new Alumno("Carlos",new DateTime("2001-04-06"),'h')
];



function listar($personas){
    foreach($personas as $persona)
        echo $persona;

}

// listar($profesores);
// listar($alumnos);


$aula1=new Aula(1,"Física");
$aula1->setProfesor($profesores[1]);
$aula1->setAlumnos($alumnos);
echo $aula1;
$aula1->dimeListadoAlumnos();


