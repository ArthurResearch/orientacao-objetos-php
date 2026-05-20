<?php

class Carro {
    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velocidadeMax;

    public function __toString() {
        $carro = $this->modelo . "-" . $this->marca;
        $carro .= ", Fabricado em " . $this->anoFabricacao;
        $carro .= ", com velocidade máxima de " . $this->velocidadeMax;
        return $carro . "\n";
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }


    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao($anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }

    public function setVelocidadeMax($velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }
}

$carro1 = new Carro();
$carro1->setModelo(readline("Informe modelo do carro: "));
$carro1->setMarca(readline("Informe a marca do carro: "));
$carro1->setAnoFabricacao(readline("Informe o ano de fabricação do carro: "));
$carro1->setVelocidadeMax(readline("informe a velocidade máxima: "));

$carro2 = new Carro();
$carro2->setModelo(readline("Informe modelo do carro: "));
$carro2->setMarca(readline("Informe a marca do carro: "));
$carro2->setAnoFabricacao(readline("Informe o ano de fabricação do carro: "));
$carro2->setVelocidadeMax(readline("informe a velocidade máxima: "));

$carro3 = new Carro();
$carro3->setModelo(readline("Informe modelo do carro: "));
$carro3->setMarca(readline("Informe a marca do carro: "));
$carro3->setAnoFabricacao(readline("Informe o ano de fabricação do carro: "));
$carro3->setVelocidadeMax(readline("informe a velocidade máxima: "));

$carroMaisRapido = $carro1;
if ($carro2->getVelocidadeMax() > $carroMaisRapido->getVelocidadeMax()){
    $carroMaisRapido = $carro2;
} if ($carro3->getVelocidadeMax() > $carroMaisRapido->getVelocidadeMax()){
    $carroMaisRapido = $carro3;
}

$carroMaisLento = $carro1;
if ($carro2->getVelocidadeMax() < $carroMaisLento->getVelocidadeMax()){
    $carroMaisLento = $carro2;
} if ($carro3->getVelocidadeMax() < $carroMaisLento->getVelocidadeMax()){
    $carroMaisLento = $carro3;
}

echo "O carro mais rápido é " . $carroMaisRapido;
echo "O carro mais lento é " . $carroMaisLento;