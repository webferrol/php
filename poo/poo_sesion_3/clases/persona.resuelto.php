<?php
class Persona{
    private string $nombre;
    private string $sexo; //m --> mujer |  h --> hombre
    private ?string $nif; //Permitimos que el valor del dni sea nulo
    private ?int $edad;  //permitimos que el valor de edad sea nulo
    private float $peso;
    private float $altura; //altura en metros


    
    private const DELGADEZ = -1;
    private const PESOIDEAL = 0;
    private const SOBREPESO = 1;


    public function __construct(string $nombre, float $peso, float $altura){
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->edad = null;
        $this->nif = null;
        $this->sexo = 'H';
    }

    public function __toString():string{
        $mayorEdad = $this->esMayorDeEdad()?"(Mayor de edad)":"(Menor de edad)";
        $infoPeso='Sobrepeso';
        if(self::calcularIMC2($this->peso,$this->altura)===self::PESOIDEAL){
            $infoPeso = "Peso ideal";
        }else if(self::calcularIMC2($this->peso,$this->altura)===self::DELGADEZ){
            $infoPeso='Delgadez';
        }

        return "<ul>
                    <li>Nombre: <em>$this->nombre</em></li>
                    <li>NIF: <em>$this->nif</em></li>
                    <li>Sexo: <em>$this->sexo</em></li>
                    <li>Edad: <em>$this->edad</em>$mayorEdad</li>
                    <li>Peso: <em>$this->peso</em></li>
                    <li>Altura: <em>".number_format($this->altura,2)."</em></li>
                    <li>IMC: {$this->calcularIMC()}</li>
                    <li>IMC: $infoPeso</li>
                </ul>";
    }

    /**
     * Setters / definidores
     */

     public function setNif(string $nif):void{
         $this->nif = $nif;
     }

     

     public function setEdad(int $edad):void{
        $this->edad = $edad;
    }



    /**
     * Otros métodos o "funciones de clase"
     */

    public function esMayorDeEdad():bool{
        // if($this->edad>18)
        //     return true;
        // else
        //     return false;

        //simplificado
        return $this->edad > 18;
    }


    public function setSexo(string $sexo):void{
        //pasamos el parámetro a mayúsculas
        $sexo = strtoupper($sexo);
        $this->sexo = self::comprobarSexo($sexo)?$sexo:'H';
     }
    /**
     * Se comprueba que el sexo sea H o M
     *
     * @param string $sexo
     * @return boolean
     */
    private static function comprobarSexo(string $sexo):bool{
        // if($sexo==="H" || $sexo==="M"){
        //     return true;
        // }else{
        //     return false;
        // }
        //simplificado
        return $sexo==="H" || $sexo==="M";
    }


    public function calcularIMC():int{
        $calculo =  $this->peso/pow($this->altura,2);
        if($calculo<20) return -1;
        if($calculo>19 && $calculo<26) return 0;
        return 1;
    }

    public static function calcularIMC2($peso,$altura):int{
        $calculo =  $peso/pow($altura,2);
        if($calculo<20) return self::DELGADEZ;
        if($calculo>19 && $calculo<26) return self::PESOIDEAL;
        return self::SOBREPESO;
    }


}


$p = new Persona("Xurxo",74,1.68);
$p->setEdad(20);
$p2 = new Persona("María",45,1.50);
$p2->setSexo("m");
echo $p;
echo $p2;