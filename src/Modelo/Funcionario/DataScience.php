<?php

namespace Moraes\Banco\Modelo\Funcionario;

use Moraes\Banco\Modelo\Funcionario\Funcionario;

class DataScience extends Funcionario {
    public function calcularBonificacao(): float
    {
        return $this->getSalario() * 0.30;
    }
}