<?php

class Escola{
    private $nome;
    private $endereco;
    private $qntdAlunos;

    public function __toString(){
        $dados = $this->nome . " | " . $this->endereco . " | " . $this->qntdAlunos;
        return $dados . "\n";
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

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getQntdAlunos()
    {
        return $this->qntdAlunos;
    }

    public function setQntdAlunos($qntdAlunos): self
    {
        $this->qntdAlunos = $qntdAlunos;

        return $this;
    }
}

//$escola1 = new Escola;
//$escola1->setNome(readline());
//$escola1->setEndereco(readline());
//$escola1->setQntdAlunos(readline());

//$escola2 = new Escola;
//$escola2->setNome(readline());
//$escola2->setEndereco(readline());
//$escola2->setQntdAlunos(readline());

//$escola3 = new Escola;
//$escola3->setNome(readline());
//$escola3->setEndereco(readline());
//$escola3->setQntdAlunos(readline());

//$escola4 = new Escola;
//$escola4->setNome(readline());
//$escola4->setEndereco(readline());
//$escola4->setQntdAlunos(readline());

$escolas = array();

for($i=1; $i<=4; $i++){
    $escola = new Escola;
    $escola->setNome(readline());
    $escola->setEndereco(readline());
    $escola->setQntdAlunos(readline());

    array_push($escolas, $escola);
}

//foreach($escolas as $e){
//    echo $e . "\n";
//}

$escolaMaisAlunos = $escolas[0];

//if ($escolas[1]->getQntdAlunos() > $escolaMaisAlunos->getQntdAlunos()){
//    $escolaMaisAlunos = $escolas[1];
//} else if ($escolas[2]->getQntdAlunos() > $escolaMaisAlunos->getQntdAlunos()) {
//    $escolaMaisAlunos = $escolas[2];
//} else if ($escolas[3]->getQntdAlunos() > $escolaMaisAlunos->getQntdAlunos()) {
//    $escolaMaisAlunos = $escolas[3];
//}

foreach($escolas as $e){
    if($e->getQntdAlunos() > $escolaMaisAlunos->getQntdAlunos()){
        $escolaMaisAlunos = $e;
    }
}

echo $escolaMaisAlunos;