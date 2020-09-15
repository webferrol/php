<?php 

# Los arreglos asosiativos nos permiten acceder a sus valore de una forma mas explicita.

$empleado = array('telefono' => null, 'edad' => 47, 'nombre'=>'Xurxo','apellido' => 'González', 'pais' => 'Galicia');

# Al igual que en los arreglos indexados, en los asosiativos tambien podemos modificar sus valores simplemente accediendo a ellos.
$empleado['telefono'] = '655908367';

printf("El teléfono de %s es: %s",$empleado['nombre'],$empleado['telefono']);

#Crea un array asociativo donde se almacene la información siguiente:
#"España"=>"Madrid", "Francia"=>"París", "Inglaterra"=>"Londres", "Italia"=>"Roma", "Portugal"=>"Lisboa", "Alemania"=>"Berlín"
#Se deberá mostrar por pantalla la capital de Francia

?>