<?php

namespace Moraes\Banco\Modelo\Funcionario;

use Moraes\Banco\Modelo\{Pessoa, Cpf};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function setNome(string $nome)
    {
        parent::validarNomePessoa($nome);
        $this->nome = $nome;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    abstract public function calcularBonificacao(): float;

    public function aumentarSalario(float $aumento) {
        $this->salario += $aumento;
    }
}