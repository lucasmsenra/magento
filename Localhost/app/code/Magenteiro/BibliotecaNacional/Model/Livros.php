<?php

namespace Magenteiro\BibliotecaNacional\Model;

class Livros
{

    private array $livros;

    public function __construct(array $livros = [])
    {
        $this->livros = $livros;
    }

    public function getLivros()
    {
        return $this->livros;
    }

}
