<?php
declare(strict_types=1);//siempre en la primera línea de nuestro código

//error_reporting(0); //explicar error_reporting. Si ponemos mal la dirección de abajo por ejemplo

require_once('includes/class.jefe.php');

$e1 = new Jefe('Xurxo',0,200,"Presidente");
$e1->setSueldo(500);
$e1->subirSueldo(5);

//Ejercicio de clase
$e1->setAltaContrato(1973,4,6);
//

$e2 = new Jefe("Pepe",null);
$e2->setIncentivo(125.25);
$e3  = new Empleado();

$empleados = [$e1,$e2,$e3];

foreach($empleados as $e){
    echo $e;
    if(method_exists($e,"dimeInformacionJefe") && get_class($e) === 'Jefe')
        echo $e->dimeInformacionJefe();
    echo "<hr>";
}