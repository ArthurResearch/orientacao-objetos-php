<?php

class Pessoa {
    public $nome;
    public $endereco;
    public $cidade;
    public $UF;
    public $altura;

    function falarOla() {
        echo "Olá mundo, sou " . $this->nome . "\n";
    }

    function falarEndereco() {
        echo "Moro em " . $this->endereco . ", " . $this->cidade . ", " . $this->UF . "\n";
    }

    function falarAltura() {
        echo "Tenho " . $this->altura . " metros\n";
    }
}

$pessoa1 = new Pessoa();
$pessoa1->nome = readline("informe sua nome: ");
$pessoa1->endereco = readline("informe sua endereco: ");
$pessoa1->cidade = readline("informe sua cidade: ");
$pessoa1->UF = readline("informe sua UF: ");
$pessoa1->altura = readline("informe sua altura: ");
$pessoa1->falarOla();
$pessoa1->falarEndereco();
$pessoa1->falarAltura();