<?php

  require_once "./conexao.php";

  $num = 0;
  $num1 = 0;
  $num2 = 0;
  $num3 = 0;
  $num4 = 0;
  $num5 = 0;
  $num6 = 0;
  $num7 = 0;
  $num8 = 0;
  $num9 = 0;

  $n = 0;
  $n1 = 0;
  $n2 = 0;
  $n3 = 0;
  $n4 = 0;
  $n5 = 0;
  $n6 = 0;
  $n7 = 0;
  $n8 = 0;
  $n9 = 0;

  $sql = "SELECT id,nome,number1,number2,number3,number4,number5,number6 FROM numeros";
  $sql2 = "SELECT nome FROM numeros";
  $sql3 = "SELECT number1,number2,number3,number4,number5,number6 FROM numeros";

  $resultado = $conexao->query($sql);
  $resultado2 = $conexao->query($sql2);
  $resultado3 = $conexao->query($sql3);

  $sqlId = "SELECT id FROM numeros";

  $id = $conexao->query($sqlId);

  $tamanho = $id->num_rows;



  $registros = [];

  if ($resultado->num_rows > 0) {

    while($row = $resultado->fetch_assoc()) {

      $registros[] = $row;

    }
    

  } else if ($conexao->error) {
    echo "Erro: " . $conexao->error;
  }

  $dadosPrincipal = [];

  if ($resultado2->num_rows > 0) {

    while ($row3 =  $resultado2->fetch_assoc()) {

      $dadosPrincipal[] = $row3;

    }

  } else if ($conexao->error) {
    echo "Erro: " . $conexao->error;
  }

  $numerosTotal = [];

  if ($resultado3->num_rows > 0) {

    while ($row4 =  $resultado3->fetch_assoc()) {

      $numerosTotal[] = $row4;

    }

  } else if ($conexao->error) {
    echo "Erro: " . $conexao->error;
  }


 

  $jogadores = [];
  

  foreach($dadosPrincipal as $dados){
    $jogadores[] =  $dados['nome'];
  }

  // print_r($jogadores);
  // echo $jogadores[0];

  // echo "<br><br>";

  $numeros = [];
  

  for($a = 0; $a < $tamanho; $a++){
    $numeros[] =  $numerosTotal[$a];
  }

  // print_r($numeros);


  // echo "<br><br>";
  
  $array = array(33,44,55,66,77,88);


  $jogador01 = [];

  for($e = 0; $e < 1; $e++){
    $jogador01[] = $numeros[$e];
  }



  // print_r($jogador01);

  

  foreach($jogador01 as $key => $valores){
    $jog01[] = $valores['number1'];
    $jog01[] = $valores['number2'];
    $jog01[] = $valores['number3'];
    $jog01[] = $valores['number4'];
    $jog01[] = $valores['number5'];
    $jog01[] = $valores['number6'];
  }


  // print_r($jog01);

  $jogador02 = [];

  for($e = 1; $e < 2; $e++){
    $jogador02[] = $numeros[$e];
  }

  foreach($jogador02 as $key => $valores){
    $jog02[] = $valores['number1'];
    $jog02[] = $valores['number2'];
    $jog02[] = $valores['number3'];
    $jog02[] = $valores['number4'];
    $jog02[] = $valores['number5'];
    $jog02[] = $valores['number6'];
  }

  // print_r($jog02);

  foreach($jog01 as $numeros){ 
    foreach($array as $certo){      
      if(intval($numeros) === $certo){
        $num++;
        if($num >= 3){
         $n = $num;       
        }
      }
    }    
  }

  foreach($jog02 as $numeros2){ 
    foreach($array as $certo){      
      if(intval($numeros2) === $certo){
        $num1++;
        if($num1 >= 3){
          $n1 = $num1;         
        }
      }
    }    
  }

 

  $total = array($jogadores[0] => $n, $jogadores[1] => $n1);
  

  $ganhador = array_search(max($total), $total);

  $valor = (max($total));

  if($valor > 0){
    echo $ganhador . " = ". $valor;
  }

?>