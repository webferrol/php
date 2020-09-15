<?php
declare(strict_types=1);
/**
 * Clase Empleado. Declaración de clase, declaración de atributos y métodos públicos,
 * instanciación(manifestación de una clase) de objetos
 * 
 * @author Xurxo González Tenreiro <xurxo@webferrol.com>
 * 
 * @version 1.0.0
 * 
 */
class Empleado{
   
    
    /**
     * Método constructor. Diseñado para establecer el estado inicial de la instancia (objeto)
     */
    public function __construct(){
       $this->nombre = 'Anónimo';  //para referirse a los campos y/o atributos (variables de campo) utilizamos la "nomenclatura del punto"
       $this->sueldo = 1000;
       $this->fechaAlta = time();//time tiene formato entero
    }

   /**
    * Método para subir el sueldo de un empleado a través de un porcentaje.
    * Este es un comentario de documentación
    *
    * @param float $porcentaje
    * @return void //con void indicamos que no hay retorono. Observa que el método (función de clase) no presenta la palabra reservada return
    */
    public function subirSueldo(float $porcentaje):void{
        $aumento = $this->sueldo*($porcentaje/100); //$aumento es una variable normal, NO campo de la clase
        $this->sueldo+=$aumento; //forma abreviada de $this->sueldo = $this->sueldo + 
    }

    //los declar abajo. Como demostración de que se pueden declarar los elementos donde se desee
    public string $nombre;
    public float $sueldo;
    public int $fechaAlta;    
}

$empleados[] = new Empleado;
$empleados[0]->sueldo = 860.20;
$empleados[0]->subirSueldo(50);

$empleados[0]->nombre = 'Xurxo';

$empleados[] = new Empleado;
$empleados[1]->subirSueldo(3);
$empleados[1]->nombre = 'Andrés';

foreach($empleados as $empleado){
    echo "<div>Nombre: $empleado->nombre; Sueldo: $empleado->sueldo; Fecha de alta:".strftime("%c",$empleado->fechaAlta)."</div>";
}