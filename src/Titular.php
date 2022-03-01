<?php

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco) 
    {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getEndereço(): Endereco
    {
        return $this->endereco;
    }
}