<?php

class Pessoa {
    private $nome;
    private $endereco;
    private $cidade;
    private $UF;
    private $altura;

    public function getApresentacao(){
        $dados = "Olá, sou " . $this->nome;
        $dados .= ", resido no endereço " . $this->endereco;
        $dados .= ", " . $this->cidade;
        $dados .= "-" . $this->UF;
        $dados .= " e possuo uma altura de " . $this->altura;
        return $dados;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getUF() {
        return $this->UF;
    }

    public function setUF($UF) {
        $this->UF = $UF;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }
}

$pessoa = new Pessoa;
$pessoa->setNome("Arthur");
$pessoa->setEndereco("Rua Marcolina Veiga de Oliveira");
$pessoa->setCidade("Foz do Iguaçu");
$pessoa->setUF("PR");
$pessoa->setAltura("1,79");
echo $pessoa->retornaApresentacao();