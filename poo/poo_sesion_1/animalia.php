<?php
declare(strict_types=1);

/**
 * Clase Animalia
 * Objetivos: utilización de class, atributos, método constructor y destructor, otros métodos,
 * instancia, acceso a atributos y métodos públicos, visualización de información
 * 
 * @author Xurxo González Tenreiro <info@webferrol.com>
 * 
 * @version 1.0.0
 * 
 */
class Animalia{
    #Por defecto todas las propiedades y funciones son publicos (visibilidad --> modificadores de acceso).
    #No es necesario especificar public, pero es mejor hacerlo para que sea más legible.
    
    //$nombre; //la visibilidad de la propiedad debe especificarse (al contrario que en los métodos que son por defecto públicos y no es necesario ponerlo) si no obtenermos un "Parse error:  syntax error"
    public string $nombre,$nombreCientifico; //nombre del animal y nombre científico. LAS DECLARACIONES LO IDEAL ES REALIZARLAS EN LÍNAS SEPARADAS
    public int $edad; //edad del animal
    public int $peso; //peso animal
    public string $reino; //Reino de la taxonomía del animal (Animalia que es inamovible)
    public int $fechaCreacion;//dada de alta


    /**
     * Método constructor obsoleto (deprecated)
     * Si no existiera método constructor (o sea si no utilizamos __construct) se busca método que tenga el mismo nombre que la clase: Mamifero() o mamifero() - dan igual las mayúsculas
     * @deprecated version
     * @return void
     */
    public function Animalia() //Si no existe método constructor se busca método que tenga el mismo nombre que la clase: Mamifero() o mamifero() - dan igual las mayúsculas
    {
        
        echo "Si no tenemos definido el método constructor __construct el método constructor se puede crear a través del nombre de la clase, en este caso ",__METHOD__;
    }
    

    //ENTRE OTRAS COSAS EL MÉTODO CONSTRUCTOR INICIALIZA LAS VARIABLES
    //"Construimos (construct)" un estado INICIAL del OBJETO
    function __construct() //no puse public delante del método. No es necesario pues está definido por defecto
    {
        
       
        $this->nombre = 'Sin nombre'; 
        $this->nombreCientifico = '';
        # time ( void ) : int
        # Devuelve el momento actual medido como el número de segundos desde la Época Unix (1 de Enero de 1970 00:00:00 GMT).
        $this->fechaCreacion = time();

        $this->peso=0;
        $this->reino = 'Animalia'; //este es el reino según la clasificación taxonómica de los animales
        $this->edad=0;

        echo __METHOD__," del objeto $this->nombre de la clase ",__CLASS__,"<br>";
    }



    /**
     * Método destructor
     */
    public function __destruct() //Se invoca automáticamente cuando se elimina la última referencia a un objeto
    {
        echo __FUNCTION__." del objeto $this->nombre. Útil para liberar recursos (archivo, conexión a bbdd,...). Se invoca una vez llegado al final del script<br>";
    }   
    
    public function dimeInformacionAnimalia():string{
        return "<ul><li>Nombre: <strong>$this->nombre</strong></li>
                    <li>Nombre científico: <strong>$this->nombreCientifico</strong></li>
                    <li>Reino: <strong>$this->reino</strong></li>
                    <li>Edad: <strong>$this->edad</strong></li>
                    <li>Peso: <strong>$this->peso</strong></li>
                    <li>Fecha de creación: <strong>{$this->obtenerFechaCreacionString()}</strong></li>
        </ul>";
    }

    /**
     * Método que transforma una fecha en formato entero a uno legible en formato de cadena caracteres
     *
     * @return string La fecha en formato caracteres. Ejemplo --> Wed Aug 26 11:48:06 2020
     */
    public function obtenerFechaCreacionString():string{
        // strftime — Formatea una fecha/hora local según una configuración local
        // strftime ( string $format [, int $timestamp = time() ] ) : string
        return strftime("%c",$this->fechaCreacion);
    }
}

$m = new Animalia; //si no lleva parámetros el método constructor o no fue creado no harán falta los paréntesis
echo $m->dimeInformacionAnimalia();

$m1 = new Animalia();
$m1->nombre = 'Lily';
$m1->nombreCientifico = 'Canis Canis';
$m1->edad = 4;
echo $m1->dimeInformacionAnimalia();

$m2 = new Animalia();
$m2->nombre = "Golfo";
$m2->edad = 5;
echo $m2->dimeInformacionAnimalia();

echo '<div>Todas las mascotas suman un todas de ',$m->edad+$m1->edad+$m2->edad,' años.</div>';
// setlocale(LC_TIME, 'es_ES', 'Spanish_Spain');
// echo strftime("%A",time());




