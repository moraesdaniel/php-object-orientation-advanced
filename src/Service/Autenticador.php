<?php

namespace Moraes\Banco\Service;

use Moraes\Banco\Modelo\Funcionario\Diretor;

class Autenticador {
    public function realizarLogin(Diretor $diretor, string $senha): void {
        if ($diretor->validarSenha($senha)) {
            echo "Usuário logado!";
        } else {
            echo "Senha inválida!";
        }
    }
}