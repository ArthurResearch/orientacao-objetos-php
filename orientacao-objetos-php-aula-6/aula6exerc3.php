<?php

class Livro {
    private $titulo;
    private $autor;
    private $genero;
    private $paginas;

    public function __toString() {
        $livro = "Título: " . $this->titulo;
        $livro .= " | Autor: " . $this->autor;
        $livro .= " | Gênero: " . $this->genero;
        $livro .= " | Número de páginas: " . $this->paginas;
        return $livro . "\n";
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }


    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }


    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }


    public function getPaginas()
    {
        return $this->paginas;
    }

    public function setPaginas($paginas): self
    {
        $this->paginas = $paginas;

        return $this;
    }
}

$livro1 = new Livro();
$livro1->setTitulo(readline("informe o título: "));
$livro1->setAutor(readline("informe o autor: "));
$livro1->setGenero(readline("informe o gênero: "));
$livro1->setPaginas(readline("informe o número de páginas: "));

$livro2 = new Livro();
$livro2->setTitulo(readline("informe o título: "));
$livro2->setAutor(readline("informe o autor: "));
$livro2->setGenero(readline("informe o gênero: "));
$livro2->setPaginas(readline("informe o número de páginas: "));

$livro3 = new Livro();
$livro3->setTitulo(readline("informe o título: "));
$livro3->setAutor(readline("informe o autor: "));
$livro3->setGenero(readline("informe o gênero: "));
$livro3->setPaginas(readline("informe o número de páginas: "));

$livroMaisPaginas = $livro1;

if ($livro2->getPaginas() > $livroMaisPaginas->getPaginas()) {
    $livroMaisPaginas = $livro2;
} else if ($livro3->getPaginas() > $livroMaisPaginas->getPaginas()){
    $livroMaisPaginas = $livro3;
}

print $livroMaisPaginas;