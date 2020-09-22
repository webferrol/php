<?php
require_once('class.vehiculo.php');

final class Furgoneta extends Vehiculo{
    private int $capacidadCarga;
    private int $plazasExtra;
    private int $volumen;

    /**
     * MÉTODOS CONSTRUCTORES
     */

    public function __construct(){
        if(method_exists($this,'__construct'.func_num_args())){
            call_user_func_array([$this,'__construct'.func_num_args()],func_get_args());        
        }
        
    }
    public function __construct0():void{
        parent::__construct0();
        $this->capacidadCarga = 0;
        $this->plazasExtra = 0;
        $this->volumen = 0;
    }

    public function __construct1(string $marca):void{
        parent::__construct1($marca);
        $this->capacidadCarga = 0;
        $this->plazasExtra = 0;
    }

    public function __construct2(int $capacidadCarga,int $plazasExtra):void{
        parent::__construct0();
        $this->capacidadCarga = $capacidadCarga;
        $this->plazasExtra = $plazasExtra;        
    }

    public function __construct3(string $marca,int $capacidadCarga,int $plazasExtra):void{
        parent::__construct1($marca);
        $this->capacidadCarga = $capacidadCarga;
        $this->plazasExtra = $plazasExtra;        
    }

    /**
     * GETTERS
     */

    public function dimeDatosFurgoneta():string{
        return 'La capacidad de carga de la furgoneta es de '.$this->capacidadCarga.', 
        y un número de '.$this->plazasExtra.' de plazas extra';
    }
   
}