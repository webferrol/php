<?php
trait Config{
    /**
     * Método que en función del servidor devuelve el protocolo web https o http
     *
     * @return string
     */
    public static function getProtocolHttp():string{
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    }
    /**
     * Método que devuleve el nombre del host con el protocolo utilizado, ejemplo, https//www.webferrol.com
     *
     * @return string
     */
    public static function getHost():string{
        return self::getProtocol().$_SERVER['HTTP_HOST'];
    }

    /**
     * Obtenemos el directorio base des sistema.
     * Como nos encontramos dentro de la carpeta libs utilizamos substr para quitar el string libs
     *
     * @return void
     */
    public static function getRutaBase(){
        return substr(__DIR__,0,-4);
    }
    /**
     * Obtenemos la ruta donde se encuentra el directorio Controllers
     *
     * @return void
     */
    public static function getRutaControllers(){
        return self::getRutaBase().DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR;
    }
}


