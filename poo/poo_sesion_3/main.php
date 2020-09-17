<?php
declare(strict_types=1);

require_once('clases/empleado.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    <?php
    //Empleado::$sueldoBase = 1500;
    $empleados[] = new Empleado('Xurxo',2018,4,6);
    $empleados[] =new Empleado('Manolo',2021,4,4);
    $empleados[] = new Empleado('Carolina',2020,3,7);
    $empleados[0]->setSueldo(2000); //subo sueldo base
    $empleados[0]->subirSueldo(50); //subo un 50% --> 2000+1000

    //Ventajas del array
    //imagine escribir todo este código si array

    
    echo '<ol>';
    foreach($empleados as $emp){
        echo '<li>',$emp,'</li>';
    }
    echo '</ol>';

   
    //Eliminamos empleados
    unset($empleados); //eliminamos empleados

    $empleado1 = new Empleado('Xurxo',2018,4,6);
    $empleado1->id=1;

    $empleado2 = new Empleado('Carolina',2020,3,7);
    $empleado2->id=2;
    
    $empleados=array($empleado1,$empleado2);
    echo '<ul>';
    foreach($empleados as $emp){
        echo '<li>',$emp->id,'. ',$emp->getNombre(),'</li>';
    }
    echo '</ul>';
    ?>
</body>
</html>