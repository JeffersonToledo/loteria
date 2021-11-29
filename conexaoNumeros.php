<?php

    $banco = 'numeroslott';
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';

    $conexaoNumeros = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexaoNumeros->connect_error) {
        die('Erro: ' . $conexaoNumeros->connect_error);
    }