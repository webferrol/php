<?php
declare(strict_types=1);
class Producto{
    private string $nombre;
    private float $precio;  //unidad de medida el €
    private ?DateTime $fechaCaducidad;

    public function __construct(string $nombre, float $precio,?DateTime $fechaCaducidad){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->fechaCaducidad = $fechaCaducidad;
    }

    public function calcularPrecio():float{
        $dias = 0;
        if($this->fechaCaducidad && $this->fechaCaducidad<new DateTime()){
            $interval = $this->fechaCaducidad->diff(new DateTime('now'));
            //https://www.php.net/manual/es/dateinterval.format.php
            $dias = (int) $interval->format('%a');
        }
        if($dias===1) return $this->precio/4;
        if($dias===2) return $this->precio/3;
        if($dias===3) return $this->precio/2;
        return $this->precio;
    }

    public function __toString(){
       
        $caducado = $this->fechaCaducidad && $this->fechaCaducidad>=new DateTime()?"<strong>CADUCADO</strong>":"";

        $fechaCaducidad=$this->fechaCaducidad?"<li>Fecha de caducidad:".$this->fechaCaducidad->format("d/m/Y")." (Fecha actual:".(new DateTime())->format("d/m/Y").") $caducado</li>":null;
        return "<ul>
                    <li>Nombre: $this->nombre</li>
                    <li>Precio: $this->precio € (Total:{$this->calcularPrecio()} €)</li>
                    $fechaCaducidad
                </ul>";
    }

}

$productos = [new Producto("Taza",13.2,null),new Producto("Manzanas",1.2,DateTime::createFromFormat("d/m/Y","14/09/2020"))];

foreach($productos as $p){
    echo $p;
    $p->calcularPrecio();
}
