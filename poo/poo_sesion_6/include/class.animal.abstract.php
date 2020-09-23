<?php
declare(strict_types = 1);
//Paso 1: la clase
// abstract class Animal{
//     protected string $nombre;
// }

// $a = new Animal();


abstract class Animal{
    protected string $nombre;

    public function getNombre():string{
        return $this->nombre;
    }
    //paso 3
    abstract public function dimeTipo():string;
}

//Creamos clase Mamífero, Perro, Caballo Paso 2
class Mamifero extends Animal{
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function dimeTipo():string{
        return "Mamífero";
    }
}

class Perro extends Mamifero{

}

class Caballo extends Mamifero{
    public function dimeTipo(): string{
        return parent::dimeTipo().' (Caballo)';
    }
}

$a = new Mamifero("Lily");
$p = new Perro('Golfo');
$c = new Caballo("Veloz");
echo $a->getNombre(),' soy ',$a->dimeTipo(),'<br>'; //método del padre
echo $p->getNombre(),' soy ',$p->dimeTipo(),'<br>';; //método del abuelo
echo $c->getNombre(),' soy ',$c->dimeTipo(),'<br>';; //método del abuelo