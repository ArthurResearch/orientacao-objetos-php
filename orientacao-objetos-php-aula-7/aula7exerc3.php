<?php

class Prato {
    private $descricao;
    private $quantidade;
    private $valorUnitario;

    public function getValorTotal(){
        return $this->valorUnitario * $this->quantidade;
    }

    public function __toString(){
    $dados = $this->descricao . " | " . $this->quantidade . " | " . $this->valorUnitario . " | Total: " . $this->valorUnitario * $this->quantidade . "\n";
    return $dados;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

$pratos = array();
$valorTotal = 0;

for ($i=1; $i<=3; $i++){
    $prato = new Prato;
    $prato->setDescricao(readline("Descrição: "));
    $prato->setQuantidade(readline("quantidade: "));
    $prato->setValorUnitario(readline("valor: "));
    array_push($pratos, $prato);
}

foreach ($pratos as $p){
    echo $p;
    $valorTotal = $valorTotal + $p->getValorTotal();
}

echo $valorTotal;