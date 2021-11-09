<?php

    $banco = 'loginlott';
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';

    $conexaoLogin = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexaoLogin->connect_error) {
        die('Erro: ' . $conexaoLogin->connect_error);
    }