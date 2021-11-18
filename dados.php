<?php

  require_once "./conexao.php";

  $sql = "SELECT id,nome,number1,number2,number3,number4,number5,number6 FROM numeros";
  $sql2 = "SELECT nome,number1,number2,number3,number4,number5,number6 FROM numeros";

  $resultado = $conexao->query($sql);
  $resultado2 = mysqli_query($conexao,$sql2);


  $registros = [];

  if ($resultado->num_rows > 0) {

    while($row = $resultado->fetch_assoc()) {

      $registros[] = $row;
    }
  } else if ($conexao->error) {
    echo "Erro: " . $conexao->error;
  }

  while ($row3 =  mysqli_fetch_array($resultado2,MYSQLI_BOTH)) {
    $dadosPrincipal[] = $row3;
  }
        
  $name01 = $dadosPrincipal;
  $name02 = $dadosPrincipal;
  $name03 = $dadosPrincipal;

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

  class Dados {
  // Propriedades
  public $name;
  public $numeros;

  // Metodos
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function set_numeros($numeros) {
    $this->numeros = $numeros;
  }
  function get_numeros() {
    return $this->numeros;
  }
}

// Nome jogador 01
$jogador1 = new Dados();
$jogador1->set_name($name01[0][0]);
$jogador01 = $jogador1->get_name();

// Números do jogador 01
$numeros1 = new Dados();
$numeros1->set_numeros(array($name01[0][1], $name01[0][2],$name01[0][3],$name01[0][4],$name01[0][5],$name01[0][6]));
$numeros01 = $numeros1->get_numeros();

// Nome jogador 02
$jogador2 = new Dados();
$jogador2->set_name($name02[1][0]);
$jogador02 = $jogador2->get_name();

// Números do jogador 02
$numeros2 = new Dados();
$numeros2->set_numeros(array($name02[1][1], $name02[1][2],$name02[1][3],$name02[1][4],$name02[1][5],$name02[1][6]));
$numeros02 = $numeros2->get_numeros();

// Nome jogador 03
$jogador3 = new Dados();
$jogador3->set_name($name02[2][0]);
$jogador03 = $jogador3->get_name();

// Números do jogador 03
$numeros3 = new Dados();
$numeros3->set_numeros(array($name03[2][1], $name03[2][2],$name03[2][3],$name03[2][4],$name03[2][5],$name03[2][6]));
$numeros03 = $numeros3->get_numeros();

  foreach($numeros01 as $numeros){ 
    foreach($array as $certo){      
      if(intval($numeros) === $certo){
        $num++;
        if(3 >= $num){
          $name = $jogador01;            
        }
      }
    }    
  }

  foreach($numeros02 as $numeros){ 
    foreach($array as $certo){      
      if(intval($numeros) === $certo){
        $num1++;
        if(3 >= $num1){
          $name1 = $jogador02;         
        }
      }
    }    
  }

  foreach($numeros03 as $numeros){ 
    foreach($array as $certo){      
      if(intval($numeros) === $certo){
        $num2++;
        if(3 >= $num2){
          $name2 = $jogador03;            
        }
      }
    }    
  } 

?>