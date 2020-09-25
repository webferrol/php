<?php
declare(strict_types=1); //declaración "obliga" a utilizar los tipos de datos que indiquemos en funciones y clases

//error_reporting(0); //Si descomentamos esta línea NO se mostrarán errores. En modo producción

$minPHPVersion = phpversion(); //Función que retorna un string que indica la versión de php del servidor

if($minPHPVersion<'7.3.1')
    die('Versión mínima de PHP: 7.3.1');//Función que detiene la aplicación y muestra el mensaje que hay a continuación
unset($minPHPVersion); //Función que elimina una varible. Puesto que no la vamos a utilizar otra vez

//cargo todos los archivos esenciales del sistema
require_once('libs/constants.php');


require_once('libs/app.php'); //incrustamos la clase App
$peticion = isset($_REQUEST['page'])?$_REQUEST['page']:'home'; //Escuchamos la petición, en caso de que no exista será home
new App($peticion);//lanzamos la petición



//lanzamos aplicacion

//isset() comprueba si una variable fue declarada (NO CONFUNDIR CON INICIALIZADA)
//$_REQUEST es un array asociativo global de PHP. Nos devuelve las peticiones (request quiere decir petición) de la url

// $pagina='init';
// if(isset($_REQUEST['page'])){
//     $pagina =$_REQUEST['page'];
// }

//$pagina=$_REQUEST['page']??'init'; //atajo de lo de arriba

//new Main($_REQUEST['page']??'init');

