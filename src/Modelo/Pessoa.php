<?php

namespace Moraes\Banco\Modelo;

abstract class Pessoa
{
    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validarNomePessoa($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): Cpf
    {
        return $this->cpf;
    }

    protected function validarNomePessoa(string $nomePessoa)
    {
        if (strlen($nomePessoa) < 5) {
            echo "Nome precisa ter no mínimo 5 caracteres!";
            exit;
        }
    }
}