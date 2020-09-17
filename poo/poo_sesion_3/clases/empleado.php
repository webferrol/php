<?php
/**
 * Clase Empleado. Constantes y variables estáticas
 * 
 * @author Xurxo González Tenreiro <xurxo@webferrol.com>
 * 
 * @version 1.1.1
 * 
 */
class Empleado{   
     //declaración de atributos
     private string $nombre;
     private float $sueldo;
     private DateTime $altaContrato;

     //constantes
     const SUELDO_BASE =1000; //declaración e inicialización, no es necesario poner PUBLIC


     //Explicación de la palabra reservada static (keyword) 
     public static float $sueldoBase =1000; //declaración e inicialización
     private static int $ordenSiguiente = 1; //declaración e inicialización de una variable estática
     private int $orden = 0;
   
    /**
     * Método constructor
     *
     * @param string $paramNombre Nombre del empleado
     * @param float|null $paramSueldo Sueldo del Empleado. Si es nulo se establecerá el sueldo base
     * @param integer $ano Año de alta del empleado
     * @param integer $mes Mes de ata del empleado
     * @param integer $dia Día de alta del empleado
     */ 
     public function __construct(string $paramNombre,int $ano = 2021, int $mes = 1, int $dia = 1){
       $this->nombre = $paramNombre;

       ////DateTime::createFromFormat //método estático --> ahora da igual, ya se verá
       $this->altaContrato = DateTime::createFromFormat('Y-m-d',"$ano-$mes-$dia");

        $this->sueldo = self::SUELDO_BASE;
        //$this->sueldo = self::$sueldoBase;

       //Establecemos orden
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
       //$this->sueldo = $paramSueldo!=null?$paramSueldo:self::$sueldoBase;
       $this->sueldo = $paramSueldo!=null?$paramSueldo:self::SUELDO_BASE;
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
}


