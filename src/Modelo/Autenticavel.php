<?php

namespace Moraes\Banco\Modelo;

interface Autenticavel {
    public function validarSenha(string $senha): bool;
}