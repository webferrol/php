<?php

//Declaración e inicialización de una variable de tipo string
$frase = 'Hoy es un día estupendo para aprender a programar en PHP';

//Mirar siempre la funente
//https://www.php.net/manual/es/function.substr.php

$frase_resumen = substr($frase,0,25);

echo $frase_resumen,'para irnos a la playa y ',substr($frase,-16);