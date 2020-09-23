<?php
declare(strict_types=1);
error_reporting(E_ALL);
//glob — Buscar coincidencias de nombres de ruta con un patrón
foreach(glob('include/*.php') as $filename){
    require_once($filename);
}

$p1 = new Jefe("Xurxo","Jefe");
$p1->setFechaNacimiento(1973,4,6);

echo $p1->getInformacion();

$a1 = new Alumno("Isa","Filología clásica");
echo '<br>',$a1->getInformacion();