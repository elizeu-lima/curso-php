<?php

function novaConexao($banco = 'Curso_PHP') {
    $servidor = '127.0.0.1:3306';
    $usuario = 'root';
    $senha = '14538';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_error);
    }

    return $conexao;
}