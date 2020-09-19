<?php
/**
 * Clase empleado. La Herencia. Creación de una clase derivada (Jefe), método constructor, parent
 * 
 * @author Xurxo González Tenreiro <xurxo@webferrol.com>
 * 
 * @version 1.2.2
 * 
 * 
 * 
 */
class Empleado{
     //declaración de atributos
     private string $nombre=''; //esta forma de inicializar está permitido. Pero el valor tiene que ser una constante
     protected float $sueldo=0.0; //esta forma tb está ok
     //private DateTime $altaContrato=new DateTime(now); //Esto daría error puesto en tiempo de ejecución la compilación daría error
     private DateTime $altaContrato; // la forma correcta es inicializar estas variables en el constructor
     private int $orden = 0; //número secuencial que muestra en qué el orden de insercción de los empleados
     private static int $ordenSiguiente = 1; //variable estática que se incrementa cada vez que creamos un objeto empleado
     private const SUELDO_BASE =1000; //Sueldo que obtendrá el Empleado siempre y cuando el sueldo de este sea null en el método constructor   
    
    /**
     * Método constructor del Empleado
     *
     * @param string $paramNombre
     * @param float|null $paramSueldo
     * @param integer $ano
     * @param integer $mes
     * @param integer $dia
     * @return void
     */
    public function __construct(string $paramNombre = 'Sin nombre',?float $paramSueldo = 0.0){
       $this->nombre = $paramNombre;
       $this->sueldo = ($paramSueldo!==null)?$paramSueldo:self::SUELDO_BASE;
       $this->altaContrato = new DateTime('now');
       $this->orden = Empleado::$ordenSiguiente++;
    }
   
    /**
     * SETTERS o definidores
     * Un definidor por norma nunca retorna ningún valor
     * Tampoco es necesario ponerse a construir setters a lo loco. Por ejemplo:
     * El sueldo de un empleado puede cambiar a lo largo del tiempo
     * No así la fecha de alta o el nombre
     */

    /**
     * Definir el sueldo de un empleado
     *
     * @param float $paramSueldo
     * @return void
     */
    public function setSueldo(?float $paramSueldo):void{
        $this->sueldo = ($paramSueldo!==null)?$paramSueldo:self::SUELDO_BASE;
    }

    /**
     * Ejercicio para los alumnos
     */
    /**
     * Método para dar modificar la fecha de contrato de los empleados
     *
     * @param integer $a año de contrato
     * @param integer $m mes de contrato
     * @param integer $d día de contrato
     * @return void
     */
    public function setAltaContrato(int $a,int $m, int $d):void{
        $this->altaContrato=DateTime::createFromFormat('Y-m-d',"$a-$m-$d"); //método estático por tanto no instanciamos el objeto
    }

    /**
     * Aumento dado a partir de un porcentaje en entero
     *
     * @param integer $porcentaje
     * @return void
     */
    public function subirSueldo(int $porcentaje):void{
        $this->sueldo += $this->sueldo*($porcentaje/100); //mejorado con respecto la anterior versión
    }

    /**
     * GETTERS o captadores
     */
    /**
     * Captador del nombre
     *
     * @return string
     */
    public function getNombre():string{
        return $this->nombre;
    }

    /**
     * Obtener el número de orden (serie) de otro empleado nuevo
     *
     * @return integer
     */
    public static function getOrdenSiguiente():int{
        return   self::$ordenSiguiente;
    }
    
    /**
     * Retorno del sueldo en € del empleado
     *
     * @return float
     */
    function getSueldo():float{//el modificador de acceso en los métodos no es obligatorio. Si no se pone nada por defecto es público
        return $this->sueldo;
    }

    /**
     * Obtención del alta de contrado del empleado
     *
     * @return DateTime
     */
    public function getAltaContrato():DateTime{
        return $this->altaContrato;
    }

    /**
     * Método automático __toString
     */
    public function __toString():string{
        return "<ul>
                    <li>Orden de Entrada: $this->orden</li>
                    <li>Alta: <em>{$this->obtenerAltaContratoString()}</em></li>
                    <li>Nombre: <em>$this->nombre</em></li>
                    <li>Sueldo: <em>$this->sueldo €</em></li>
                </ul>";
    }

    /** 
    *  Otras funciones 
    */    

    /**
     * Fecha de alta en formato string
     *
     * @return string
     */
    public function obtenerAltaContratoString():string{
        return $this->altaContrato->format('d-m-Y');
    }    
}