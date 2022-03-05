<?php

namespace Moraes\Banco\Service;

use Moraes\Banco\Modelo\Autenticavel;
use Moraes\Banco\Modelo\Funcionario\Diretor;

class Autenticador {
    public function realizarLogin(Autenticavel $autenticavel, string $senha): void {
        if ($autenticavel->validarSenha($senha)) {
            echo "Usuário logado!";
        } else {
            echo "Senha inválida!";
        }
    }
}