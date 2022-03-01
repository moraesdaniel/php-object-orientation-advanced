<?php

namespace Moraes\Banco\Modelo\Funcionario;

use Moraes\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario {
    public function calcularBonificacao(): float
    {
        return $this->getSalario();
    }
}