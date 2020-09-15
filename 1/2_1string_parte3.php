<?php
//comparaciones
/**
 *  strcmp ( string $str1 , string $str2 ) : int
 *  Devuelve < 0 si str1 es menor que str2; > 0 si str1 es mayor que str2 y 0 si son iguales.
 *  Tenga en cuenta que esta comparación considera mayúsculas y minúsculas. 
 */
$alumno1 = "David";
$alumno2 = 'david';

$igualesBool = strcmp($alumno1,$alumno2)===0?'iguales':'no iguales';

echo "[strcmp] $alumno1 y $alumno2 son ".strcmp($alumno1,$alumno2).", por tanto $igualesBool";


/**
 * strcasecmp ( string $str1 , string $str2 ) : int
 * Comparación de string segura a nivel binario e insensible a mayúsculas y minúsculas.
 * Devuelve < 0 si str1 es menor que str2; > 0 si str1 es mayor que str2 y 0 si son iguales. 
 */

$alumno1 = "David";
$alumno2 = 'david';

$igualesBool = strcasecmp($alumno1,$alumno2)===0?'iguales':'no iguales';

echo "<br>[strcasecmp]$alumno1 y $alumno2 son ".strcasecmp($alumno1,$alumno2).", por tanto $igualesBool";


