<?php

require_once "./conexaoLogin.php";


$login = $_POST['nomeCadastro'];
$senha = $_POST['senhaCadastro'];

$query_select = "SELECT username FROM usuarios";
$query_senha = "SELECT senha FROM usuarios";
$select = $conexaoLogin->query($query_select);
$select_senha = $conexaoLogin->query($query_senha);
$array = $select->fetch_array(MYSQLI_NUM);
$arraySenha = $select_senha->fetch_array(MYSQLI_NUM);

// echo $arraySenha[0] . '<br>';
// echo $array[0] . '<br>';


if (
  $login === '' || $login === null || $login === $array[0] ||
  $senha === '' || $senha === null || $senha === $arraySenha[0]
) 
{
  echo "<script language='javascript' type='text/javascript'>
      alert('Login e/ou senha incorretos ou existente');window.location.href='index.html';</script>";
} 
else {

  if ($login != $array[0] || $senha != $arraySenha[0]) {

    $dados = $_POST;


    require_once "./conexao.php";

    $sql = "INSERT INTO usuarios
      (username, senha)
      VALUES (?, ?)";

    $stmt = $conexaoLogin->prepare($sql);

    $params = [
        $dados['nomeCadastro'],
        $dados['senhaCadastro'],
    ];

    // foreach($params as $param) {
    //     echo $param;
    // }

    $stmt->bind_param("ss", ...$params); // s - string (nome, data, email, site), i - inteiro (filhos).

    if ($stmt->execute()) {

      unset($dados);

      echo "<script language='javascript' type='text/javascript'>
        alert('Cadastro feita com sucesso');window.location.href='index.html';</script>";
              
    }
  }
}