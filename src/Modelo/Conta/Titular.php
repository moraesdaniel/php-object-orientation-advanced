<?php

namespace Moraes\Banco\Modelo\Conta;

use Moraes\Banco\Modelo\{Pessoa, Cpf, Endereco};

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco) 
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereço(): Endereco
    {
        return $this->endereco;
    }
}