<?php
class Persona{
    private string $nombre;
    private string $sexo; //m --> mujer |  h --> hombre
    private ?string $nif; //Permitimos que el valor del dni sea nulo
    private ?int $edad;  //permitimos que el valor de edad sea nulo
    private float $peso;
    private float $altura; //altura en metros


    public function __construct(string $nombre, float $peso, float $altura){
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->edad = null;
        $this->nif = null;
        $this->sexo = 'm';
    }

    public function __toString():string{
        return "<ul>
                    <li>Nombre: <em>$this->nombre</em></li>
                    <li>NIF: <em>$this->nif</em></li>
                    <li>Sexo: <em>$this->sexo</em></li>
                    <li>Edad: <em>$this->edad</em></li>
                    <li>Peso: <em>$this->peso</em></li>
                    <li>Altura: <em>$this->altura</em></li>
                </ul>";
    }

    //coloca los setters al campo nif y edad

}