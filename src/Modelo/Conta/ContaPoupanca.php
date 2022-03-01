<?php

namespace Moraes\Banco\Modelo\Conta;

use Moraes\Banco\Modelo\Conta\Conta;

class ContaPoupanca extends Conta
{
    public function getPercentualTarifa(): float
    {
        return 0.03;
    }
}