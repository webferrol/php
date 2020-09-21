<?php
require_once('class.empleado.php');
/**
 * Class Jefe
 * @author Xurxo González Tenreiro <xurxo@webferrol.com>
 * 
 * @version 1.0.0
 * 
 */
class Jefe extends Empleado{
    
    //Paso 1:
    //probar el programa sin método constructor
    //probar utilizar campos de la superclase y métodos (__toString y otros)

    //Paso 2:
    //Crea los siguientes campos y sus correspondientes setters y getters
    private float $incentivo; //complemento salarial sólo para los jefes
    private string $cargo;

    /**
     * SETTERS
     */
   
    public function setIncentivo(float $incentivo):void{
        $this->incentivo = $incentivo;
    }
    public function setCargo(float $cargo):void{
        $this->cargo = $cargo;
    }

    /**
     * GETTERS
     */

    public function getIncentivo():float{
        return $this->incentivo;
    }
    public function getCargo():string{
        return $this->cargo;
    }

    //Paso 3:
    /**
     * Método constructor de la clase derivada, subclase o clase hija
     *
     * @param string $nombre
     * @param float|null $sueldo //sueldo base del empleado
     * @param float $incentivo //incentivo salarial por ser jefe
     */
    public function  __construct(string $nombre = 'Jefe sin nombre', ?float $sueldo = 0.0, float $incentivo = 0.0, string $cargo = 'Gerente'){
        //parent::__construct(); //probar con el constructor vacío
        parent::__construct($nombre,$sueldo);
        $this->incentivo = $incentivo;
        $this->cargo = $cargo;
    }

    

   

    /**
     * Funciones
     */   
    /**
     * Devuelve el sueldo total, es decir sueldo base + incentivo
     *
     * @return float
     */ 
    public function dameSueldoTotal(): float{
        //return $this->getSueldo() + $this->incentivo;// no hace falta porque el modificar de acceso de sueldo de la clase padre es protected
        return $this->sueldo + $this->incentivo;
    }

    /**
     * Devuelve la información de los campos de la clase Jefe
     *
     * @return string
     */
    public function dimeInformacionJefe():string{
        return "<ul>
                    <li>Cargo: $this->cargo</li>
                    <li>Incentivo: <em>$this->incentivo</em></li>
                    <li>Total: <em>{$this->dameSueldoTotal()} €</em></li>
                </ul>";
    }

}