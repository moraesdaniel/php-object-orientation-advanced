<?php

spl_autoload_register(function (string $nomeCompletoClasse){
    $caminhoArquivo = str_replace('Moraes\\Banco', 'src', $nomeCompletoClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});