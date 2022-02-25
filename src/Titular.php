<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco) {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEndereço(): Endereco
    {
        return $this->endereco;
    }

    private function validarNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter no mínimo 5 caracteres!";
            exit;
        }
    }
}