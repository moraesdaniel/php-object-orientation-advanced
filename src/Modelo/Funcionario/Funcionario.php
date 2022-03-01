<?php

namespace Moraes\Banco\Modelo\Funcionario;

use Moraes\Banco\Modelo\{Pessoa, Cpf};

abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getCargo(): string
    {
        return $this->cargo;
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

    public function calcularBonificacao(): float
    {
        return $this->salario * 0.10;
    }

    public function aumentarSalario(float $aumento) {
        $this->salario += $aumento;
    }
}