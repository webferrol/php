<?php
declare(strict_types=1);
/**
 * Clase Empleado. Encapsulación (private/public), método constructor con parámetros,
 * setter y getters, método __toString()
 * 
 * @author Xurxo González Tenreiro <xurxo@webferrol.com>
 * 
 * @version 1.1.0
 * 
 */
class Empleado{
   
     //declaración de atributos. Buscamos encapsulamiento
     private string $nombre;
     private float $sueldo;
     //https://www.php.net/manual/es/class.datetime.php
     private DateTime $altaContrato;
   
    public function __construct(string $paramNombre = "Sin nombre",float $paramSueldo = 0.0, int $ano = 1, int $mes = 1, int $dia = 1){
       $this->nombre = $paramNombre;
       $this->sueldo = $paramSueldo;
       ////DateTime::createFromFormat //método estático --> ahora da igual, ya se verá
       $this->altaContrato = DateTime::createFromFormat('Y-m-d',"$ano-$mes-$dia");
       
    }

   
    /**
     * SETTERS o definidores
     * Un definidor por norma nunca retorna ningún valor
     * Tampoco es necesario ponerse a construir setters a lo loco. Por ejemplo:
     * El sueldo de un empleado puede cambiar a lo largo del tiempo
     * No así la fecha de alta o el nombre
     */
    public function setSueldo(float $s):void{
        $this->sueldo = $s;
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
                    <li>Nombre: <em>$this->nombre</em></li>
                    <li>Sueldo: <em>$this->sueldo €</em></li>
                    <li>Alta: <em>{$this->obtenerAltaContratoString()}</em></li>
                </ul>";
    }

    /** 
    *  Otras funciones 
    */
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
     * Fecha de alta en formato string
     *
     * @return string
     */
    public function obtenerAltaContratoString():string{
        return $this->altaContrato->format('d-m-Y');
    }

   

    
}

$e1 = new Empleado("Xurxo",1200, 2002, 3, 3);
$e2 = new Empleado("Manolo",2000,2020);
$e1->subirSueldo(5);
//echo $e1->nombre; //da error puesto que es privado

echo "<div>
        <p>{$e1->getNombre()}<p><p>{$e1->getSueldo()}</p><p>{$e1->obtenerAltaContratoString()}</p>
     </div>";

echo $e1; //$e1 es una instancia de la clase Empleado

echo $e2;



