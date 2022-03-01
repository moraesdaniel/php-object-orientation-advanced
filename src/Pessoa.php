<?php

class Pessoa
{
    public string $nome;
    public Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
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

    public function validarNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter no mínimo 5 caracteres!";
            exit;
        }
    }
}