<?php 
declare(strict_types=1);
// Notas:
# Los nombres de las variables son sensibles a mayúsculas y minúsculas
# Los nombres de variables no pueden llevar espacios, empezar por números o llevar caracteres especiales como puntos o incluso la letra ñ

#Hay una serie de palabras reservadas que en principio no utilizaremos para nuestras variables y funciones, también denomominadas "constructores de lenguaje (language constructs)":
#https://www.php.net/manual/es/reserved.keywords.php

# Tipos de datos:
# String: Cadena de texto
# Integer: Numeros enteros
# Float/Double: Numeros con decimales
# Boolean: Verdadero o Falso (true / false)
# Array: Arreglo
# Object: Objeto
# Class: Clase
# Null: Cuando a una variable aun no se le ha asignado ningun valor

// Ejemplos de variables almacenando diferentes tipos de datos:

// String
$nombre = "Xurxo";



// Entero
$numero = 7;

echo "7/5=",(70/6),'<br>';

function dividir(int $num1,int $num2):int{
    return intval($num1/$num2);//obtiene el valor entero de una variable
}

echo "7/5=",dividir(70,6),'<br>';


// Boleano
$verdadero_falso = true;


// Comillas Sencillas vs Comillas Dobles
# En las comillas dobles podemos llamar variables, mientras que en las sencillas no.
# Sin embargo usar comillas dobles en ciertas situaciones puede traernos problemas de seguridad.
# echo/print constructores de lenguaje (ver el enlace https://cybmeta.com/php-diferencias-entre-echo-print-print_r-y-var_dump)

echo 'Mi nombre es ' . $nombre,' González'; //echo admite varios parámetros
echo '<br>';

print "Mi nombre es $nombre";


//obtener el tipo de variable 
//función gettype()

//Ejercicios
//1. Crea dos variables, súmalas y muestra el resultado
//2. Muestra los números del 1 al 10 en línea


?>