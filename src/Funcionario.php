<?php

class Funcionario
{
    private string $nome;
    private Cpf $cpf;
    private string $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getCargo()
    {
        return $this->cargo;
    }
}