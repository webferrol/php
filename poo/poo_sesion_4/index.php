<?php
declare(strict_types=1);

include_once('class/empleado.php'); //antes pusimos require, con include si la ruta está mal sólo tenemos un aviso


$e1 = new Empleado('Xurxo',null,1999,3,2);
$e2 = new Empleado('Cristina',0);
$e3 = new Empleado();
$e3->subirSueldo(5);
$e4 = new Empleado('Fernando');

$empleados = [$e1,$e2,$e3,$e4];
foreach($empleados as $e)
    echo $e;

print 'El siguiente empleado es el número '.Empleado::getOrdenSiguiente()."<br>";

$e1->dameArgumentos("tata","paga");