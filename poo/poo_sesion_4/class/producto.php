<?php
declare(strict_types=1);
class Producto{
    private string $nombreProducto;
    private float $precioProducto; //€

    private ?DateTime $fechaCaducidad;

    public function __construct(string $nombre, float $precio, DateTime $caducidad=null){
        $this->nombreProducto = $nombre;
        $this->precioProducto = $precio;
        $this->fechaCaducidad = $caducidad;
    }

    public function __toString():string{   
        $fechaCaducidadString = $this->fechaCaducidad?"<li>Fecha Caducidad: ".$this->fechaCaducidad->format("d/m/Y"):""; 
        if($fechaCaducidadString)
            $this->calcularCaducidad();
        return "<ul>
                    <li>Producto: $this->nombreProducto</li>
                    <li>Precio: $this->precioProducto €. Total(Con descuento): {$this->calcularCaducidad()} €</li>
                    $fechaCaducidadString
                </ul>";
        
    }

    public function calcularCaducidad():float{
        if($this->fechaCaducidad && $this->fechaCaducidad<new DateTime){
            //public DateTime::diff ( DateTimeInterface $targetObject [, bool $absolute = FALSE ] ) : DateInterval
            $interval = $this->fechaCaducidad->diff(new DateTime);
            $interval = (int) $interval->format("%d");
            switch($interval){
                case 0:
                case 1:
                    return $this->precioProducto/4;
                case 2:
                    return $this->precioProducto/3;
                case 3:
                    return $this->precioProducto/2;
            }
        }
        return $this->precioProducto;
    }
}

$productos[] = new Producto("Zapatos",24.5);

$fechaCaducidad = DateTime::createFromFormat("d/m/Y","17/9/2020");
$productos[] = new Producto("Manzanas",3,$fechaCaducidad);

foreach($productos as $p)
    echo $p;