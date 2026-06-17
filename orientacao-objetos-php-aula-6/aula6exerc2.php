<?php

class Aluno {
    private $nome;
    private $nota1;
    private $nota2;
    
    function __construct($nota1, $nota2) {
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }
    
    public function calcularMedia() {
        $media = ($this->nota1 + $this->nota2) / 2;
        return $media;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNota1()
    {
        return $this->nota1;
    }

    public function setNota1($nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    public function getNota2()
    {
        return $this->nota2;
    }

    public function setNota2($nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }
}

$aluno1 = new Aluno(8, 6);
$aluno1->setNome("Leandro");
echo $aluno1->getNome() . ": ";
echo $aluno1->calcularMedia() . "\n";

$aluno1 = new Aluno(3, 5);
$aluno1->setNome("João");
echo $aluno1->getNome() . ": ";
echo $aluno1->calcularMedia() . "\n";

$aluno1 = new Aluno(9, 10);
$aluno1->setNome("Matheus");
echo $aluno1->getNome() . ": ";
echo $aluno1->calcularMedia();