<?php
declare(strict_types=1);
abstract class Auto
{
    abstract public function consumir();
}

class AutoGasolina extends Auto
{
    public function consumir() {
        return 'El ' . __CLASS__ . ' consume Gasolina';
    }
}

class AutoDiesel extends Auto
{
    public function consumir()
    {
        return 'El ' . __CLASS__ . ' consume Diesel';
    }
}

// Prueba de polimorfismo: La función mostrar() usa un objeto Auto como parámetro.
// Sin embargo, en tiempo de ejecución decidirá cuál función consumir() es apta.
function mostrar(Auto $auto)
{
    echo $auto->consumir(), PHP_EOL;
}

// Prueba de los objetos y las funciones
$carroGasolina = new AutoGasolina();
$carroDiesel = new AutoDiesel();

mostrar($carroGasolina);
mostrar($carroDiesel);

