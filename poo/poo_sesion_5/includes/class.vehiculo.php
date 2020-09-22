<?php
/**
 * Ejercicio de Herencia. Vídeos 32,40,41,42
 * 
 * @author Xurxo <xurxo@webferrol.com>
 * 
 * @version 1.0.0
 */
abstract class Vehiculo{
    protected int $numeroRuedas;
    private float $largo; //en cm
    private float $ancho; //en cm
    private int $motor; //caballos del motor
    private float $pesoPlataforma; //en kg
    private ?string $color;
    private string $matricula;
    private string $marca;
    private bool $asientosCuero;
    private bool $climatizador;

    /**
     * Método constructor. Técnica de funciones mágicas
     */

    public function __construct(){
        if(method_exists($this,'__construct'.func_num_args())){
            call_user_func_array([$this,'__construct'.func_num_args()],func_get_args());        
        }
    }

    public function __construct0():void{
        $this->color = 'Blanco';
        $this->marca = 'Por definir';
        $this->matricula = 'Sin matricular';
        $this->numeroRuedas = 4;
        $this->largo = 2000;
        $this->ancho = 300;
        $this->motor = 1600;
        $this->pesoPlataforma = 500;
        $this->asientosCuero = false;
        $this->climatizador = false;
    }

    public function __construct1(string $marca):void{
        $this->__construct0();
        $this->marca = $marca;
    }

    /**
     * SETTERS
     */
   

    public function setAsientosCuero(bool $asientosCuero):void{
        $this->asientosCuero = $asientosCuero;
    }

    public function setClimatizador(bool $climatizador):void{
        $this->climatizador = $climatizador;
    }

    public function setColor(string $color):void{
        $this->color = $color;
    }

    public function setNumeroRuedas(int $ruedas = 2):void{
        $this->numeroRuedas = $ruedas;
    }

    /**
     * GETTERS
     */
    public function getMarca():string{
        return $this->marca;
    }

    public function getColor():?string{
        return $this->color;
    }

    public function getNumeroRuedas():int{
        return $this->numeroRuedas;
    }

    public function __toString():string{
        return "La plataforma del coche ($this->marca) tiene $this->numeroRuedas ruedas. Mide ".($this->largo/100)." metros con un ancho de $this->ancho centímetros y cuyo peso de plataforma es de $this->pesoPlataforma Kg. Motor de $this->motor CV. Su color es $this->color";
    }

    /**
     * Métodos adicionales
     */

    public function dimeInformacionAsientosCuero():string{
        return $this->asientosCuero ? "El vehículo dispone de asientos de cuero":"El vehículo dispone de asientos de serie";
    }

    public function dimeInformacionClimatizador():string{
        return $this->climatizador ? "El vehículo incorpora climatizador":"El vehículo lleva aire acondicionado";
    }

    public function dimePesoTotalDelCoche():float{
        $pesoTotal = $this->pesoPlataforma;
        $pesoTotal += $this->climatizador ? 20.0 : 0.0;
        $pesoTotal += $this->asientosCuero ? 10.0 : 0.0;
        return $pesoTotal;
    }
}