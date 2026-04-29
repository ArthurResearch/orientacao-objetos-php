<?php

class Retangulo {
    public $base;
    public $altura;

    function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    function area(){
        $area = "Área: " . $this->base * $this->altura . " metros\n";
        return $area;
    }

    function perimetro(){
        $perimetro = "Perímetro: " . 2 * ($this->base + $this->altura) . " metros\n";
        return $perimetro;
    }
}

$retangulo1 = new Retangulo(5, 6);
$retangulo1->area();
$retangulo1->perimetro();

$retangulo2 = new Retangulo(10,20);
$retangulo2->area();
$retangulo2->perimetro();

$retangulo3 = new Retangulo(50, 100);
$retangulo3->area();
$retangulo3->perimetro();
