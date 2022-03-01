<?php

namespace Moraes\Banco\Modelo\Conta;

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