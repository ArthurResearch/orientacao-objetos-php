<?php

class Usuario{
    private $nome;
    private $sobrenome;
    private $idade;

    public function __toString(){
        $dados = $this->nome . $this->sobrenome . $this->idade . " anos";
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

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

$lista = array();
$opcao = 0;

do {
    echo "\n---MENU---\n";
    echo "1 - Inserir\n";
    echo "2 - Listar\n";
    echo "0 - Sair\n";

    $opcao = readline("escolha: ");

    switch($opcao){
        case 0:
            echo "Programa encerrado\n";
            break;

        case 1:
            $usuario = new Usuario;
            $usuario->setNome(readline("Nome: "));
            $usuario->setSobrenome(readline("Sobrenome: "));
            $usuario->setIdade(readline("Idade: "));
            array_push($lista, $usuario);
            echo "Inserindo...\n";
            break;

        case 2:
            echo "Listando...\n";
            foreach($lista as $l){
                echo $l . "\n";
            }
            break;

        default:
            echo "Opção INVÁLIDA\n";
            break;
    }
} while ($opcao != 0);