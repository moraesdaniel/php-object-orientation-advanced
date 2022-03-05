<?php

namespace Moraes\Banco\Modelo\Funcionario;

use Moraes\Banco\Modelo\Autenticavel;
use Moraes\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario implements Autenticavel
{
    public function calcularBonificacao(): float
    {
        return $this->getSalario();
    }

    public function validarSenha(string $senha): bool {
        return $senha == '4321';
    }
}