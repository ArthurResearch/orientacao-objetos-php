<?php

class Veiculo {
    private $capacidade;
    private $passagensVendidas;

    public function __construct($capacidade){
        $this->capacidade = $capacidade;
        $this->passagensVendidas = 0;
    }

    public function venderPassagem($quantidade){
        if ($quantidade <= ($this->capacidade - $this->passagensVendidas)) {
            $this->passagensVendidas += $quantidade;
            return true;
        }
        return false;
    }

    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }

}

$capacidade = readline("informe a capacidade do veículo: ");
$veiculo = new Veiculo($capacidade);

do {
    $quantidade = readline("informe a quantidade de passagens: ");
    $vendeu = $veiculo->venderPassagem($quantidade);

    if ($vendeu) {
        echo "Passagens Vendidas\n";
    } else {
        echo "passagens não foram vendidas\n";
    }

} while ($quantidade > 0);