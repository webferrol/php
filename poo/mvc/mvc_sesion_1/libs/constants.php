<?php
#Protocolo de WEB utilizado por el servidor
define('PROTOCOL',(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://");

//URL de base de nuestro servidor. Ejemplo: http://localhost
define('HOST_URL',PROTOCOL.$_SERVER['HTTP_HOST']);

//Ruta raíz de nuestros directorios
define('ROOT_ROUTE',substr(__DIR__,0,-4));

//Ruta de nuestros controladores
define('CONTROLLERS_ROUTE', ROOT_ROUTE.'controllers'.DIRECTORY_SEPARATOR);
define('LIBS_ROUTE', ROOT_ROUTE.'libs'.DIRECTORY_SEPARATOR);