<?php

namespace Moraes\Banco\Modelo\Funcionario;

use Moraes\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario 
{
    public function subirNivel(): void
    {
        $this->aumentarSalario($this->getSalario() * 0.25);
    }
}