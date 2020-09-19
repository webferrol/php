<?php
/**
 * Clase Empleado. Simulación de sobrecarga método constructor
 * 
 * @author Xurxo González Tenreiro <xurxo@webferrol.com>
 * 
 * @version 1.1.2
 * 
 */
class Empleado{   
     //declaración de atributos
     private string $nombre;
     private float $sueldo;
     private DateTime $altaContrato;
     private int $orden = 0; //número secuencial que muestra en qué el orden de insercción de los empleados
     private static int $ordenSiguiente = 1; //variable estática que se incrementa cada vez que creamos un objeto empleado
     private const SUELDO_BASE =1000; //Sueldo que obtendrá el Empleado siempre y cuando el sueldo de este sea null en el método constructor     
     
   
    /**
     * Método constructor
     * Recibe argumentos mágicos
     */
    public function __construct(){       
        $numeroArgumentos = func_num_args();//obtenemos el número de argumentos/parámetros pasados al método constructor
        $constructor = "__construct$numeroArgumentos";
        if(method_exists($this,$constructor)){
           call_user_func_array([$this,$constructor],func_get_args());
        }else{
            //llamamos al método por defecto. Otra opción es que no exista el else y recogieramos el error
            $this->__construct0();
        }
        $this->orden = Empleado::$ordenSiguiente++;        
    }

    public function __construct0():void{
        $date = explode("-",(new DateTime())->format('Y-m-d'));
        $this->__construct5('Sin nombre',self::SUELDO_BASE,$date[0],$date[1],$date[2]);
    }
    /**
     * Simulación del método constructor que carga el nombre
     *
     * @param string $paramNombre
     * @return void
     */
    public function __construct1(string $paramNombre):void{
        $date = explode("-",(new DateTime())->format('Y-m-d'));
        $this->__construct5($paramNombre,self::SUELDO_BASE,$date[0],$date[1],$date[2]);
    }
    /**
     * Simulación del método constructor que carga el nombre y el sueldo
     *
     * @param string $paramNombre
     * @param float|null $paramSueldo
     * @return void
     */
    public function __construct2(string $paramNombre,?float $paramSueldo):void{
        $date = explode("-",(new DateTime())->format('Y-m-d'));
        $this->__construct5($paramNombre,$paramSueldo,$date[0],$date[1],$date[2]);
    }
    /**
     * Simulaición del método constructor que carga el nombre, sueldo y fecha de alta
     *
     * @param string $paramNombre
     * @param float|null $paramSueldo
     * @param integer $ano
     * @param integer $mes
     * @param integer $dia
     * @return void
     */
    public function __construct5(string $paramNombre,?float $paramSueldo, int $ano, int $mes, int $dia):void{
       $this->nombre = $paramNombre;
       $this->sueldo = ($paramSueldo!==null)?$paramSueldo:self::SUELDO_BASE;
       $this->altaContrato = DateTime::createFromFormat('Y-m-d',"$ano-$mes-$dia");
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
    public function setSueldo(float $paramSueldo):void{
        $this->sueldo = ($paramSueldo)?$paramSueldo:self::SUELDO_BASE;
    }

    /**
     * Aumento dado a partir de un porcentaje en entero
     *
     * @param integer $porcentaje
     * @return void
     */
    public function subirSueldo(int $porcentaje):void{
        $aumento = $this->sueldo*($porcentaje/100);
        $this->sueldo+=$aumento;
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
                    <li>Nombre: <em>$this->nombre</em></li>
                    <li>Sueldo: <em>$this->sueldo €</em></li>
                    <li>Alta: <em>{$this->obtenerAltaContratoString()}</em></li>
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
    
    public function dameArgumentos(...$args){
        $constructor ="Empleado".count($args);

        if(method_exists($this,$constructor)){
            call_user_func_array([$this,$constructor],func_get_args());
        }
    }

    public function Empleado1($var){
        echo $var;
    }

    public function Empleado2($var,$var2){
        echo $var." ".$var2;
    }
}