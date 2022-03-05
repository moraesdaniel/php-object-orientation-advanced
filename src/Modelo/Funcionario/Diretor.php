<?php

namespace Moraes\Banco\Modelo\Funcionario;

use Moraes\Banco\Modelo\Funcionario\Funcionario;

class Diretor extends Funcionario
{
    public function calcularBonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    public function validarSenha(string $senha): bool {
        return $senha == '1234';
    }
}