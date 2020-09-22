<?php
declare(strict_types=1);//siempre en la primera línea de nuestro código

require_once('includes/class.furgoneta.php');





$furgo = new Furgoneta('Pegaso',2000,2);
$furgo->setAsientosCuero(true);

echo $furgo,'<br>',$furgo->dimeInformacionAsientosCuero();