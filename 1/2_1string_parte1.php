<?php

//Declaración e inicialización de una variable de tipo string
$nombre = 'Xurxo';

print("<p>Mi nombre es $nombre.</p>");

//La función strlen devuelve la longitud de la cadena
echo '<p>Mi nombre tiene '.strlen($nombre).' letras</p>';


//La función substr() permite substraer una subcadena de texto dentro de otra cadena
echo '<p>La primera letra de mi nombre es '.substr($nombre,0,1),'</p>';
echo "<p>La última letra es ",substr($nombre,-5,1),"</p>";

//Sin funciones puedes consiguir el mismo efecto pues puedes tratar la cadena de texto como un array
echo '<p>La primera letra de mi nombre es '.$nombre[0],'</p>';//En vez de corchetes puedes poner llaves, $nombre{0} pero esta opción está obsoleta (deprecatted en la versión 7)

$ultimaLetra = strlen($nombre) - 1; //obtenemos el índice 

echo "<p>La última letra es ",substr($nombre,$ultimaLetra,1),"</p>";
echo "<p>La última letra es ",substr($nombre,-1),"</p>";
echo "<p><p>La última letra es  $nombre[$ultimaLetra]</p>";