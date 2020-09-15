<?php 

//Una constante es como una variable solo que una vez definida no podemos volver a cambiar el valor
//Las constantes tiene una ventaja que tienen un scope global

const SALTO = '<br>';
const MESES = 12;
$meses =12;
function miFuncion(){
    //define('MESES',12);
    //const MESES = 12;  //Si descomentamos esta línea tendremos un Parse error (error en tiempo de compilación). Con const no podemos definir una constante dentro de una función en cambio con define no hay problema
    echo 'Meses:',MESES,'(Constante: Alcance global)<br>';
    echo 'Meses:',$meses,'(variable: Alcance local)<br>';
}
miFuncion();

//Existen dos maneras de declarar una constante:
//1. define() Sucede en tiempo de ejecución
//2. const Sucede en tiemp de compilación


if(true)
    define('NOMBRE', 'Xurxo');
//if(true) //Si descomento esta línea sucede un error. Puesto que la declaración de PI sucede en tiempo de compilación (Parse error)
    const PI = 3.1416;

echo PI,'<br>';
echo NOMBRE,SALTO;

//las constantes no pueden cambiar el valor asignado
#PI = 3.14159; //Parse error (error de compilación)  por el signo = 

//En las variables si podemos cambiar el valor que se le asigno.

$nombre = "Carlos".SALTO;
echo $nombre; // Mostraria Carlos en pantalla

$nombre = "Arturo";
echo $nombre; // Mostraria Arturo en pantalla



//1. Calcula el área del círculo de radio 2

?>
