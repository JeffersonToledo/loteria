<?php

    $banco = 'loteria';
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = 'admin';

    $conexaoLogin = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexaoLogin->connect_error) {
        die('Erro: ' . $conexaoLogin->connect_error);
    }