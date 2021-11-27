<?php

  require_once "./conexao.php";

  $sql = "SELECT id,nome,number1,number2,number3,number4,number5,number6 FROM numeros";
  $sql2 = "SELECT nome,number1,number2,number3,number4,number5,number6 FROM numeros";

  $resultado = $conexao->query($sql);
  $resultado2 = mysqli_query($conexao,$sql2);

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

  

  while ($row3 =  mysqli_fetch_array($resultado2,MYSQLI_BOTH)) {
    $dadosPrincipal[] = $row3;
  }

  $teste4 = $dadosPrincipal;

  $jogadores = array();
  

  for($t = 0; $t < $tamanho; $t++){
    for($p = 0; $p <=6; $p++){
      array_push($jogadores, $teste4[$t][$p]);
    }
    
  }

  // $ct =  count($jogadores);

  // echo $ct;

  // for($i = 0; $i < 8; $i++){
  //   $b = $i * 7;
  //   if(isset($jogadores[$b]) === "Helena"){
  //     echo "certou";
  //   }
  // }
      


    // for($i = 7; $i < count($jogadores); $i++){
    //   echo $jogadores[$i];
    // }


  // print_r(array_chunk($jogadores,7));

  // $grup = $jogadores[0];

  // echo $grup;


  // if($tamanho > 0)
  // {
  //   for($e = 0; $e <= $tamanho; $e++){
  //     for($r = 0; $r <= 6; $r++){
  //       array_push($jogadores, $teste4[$r]);
  //     }
      
  //   }
  
  // }



    $ct = count($jogadores);

    // print_r($jogadores);
        
  if($resultado2->num_rows > 0)
  {

    // $name01 = $jogadores[0];
    // $name02 = $jogadores[7];
    // $name03 = $jogadores[13];
    // $name04 = $jogadores[19];
    // $name05 = $jogadores[25];
    // $name06 = $jogadores[31];
    // $name07 = $jogadores[37];
    // $name08 = $jogadores[43];
    // $name09 = $jogadores[49];
    // $name10 = $jogadores[55];

    $teste05 = [];

    for($j = 0; $j <= $tamanho -1;$j++){
      
      $t = $j * 7;
      $teste05[] = $jogadores[$t];
    }

    $tb = count($teste05);

    $teste06 = [];

    for($l = 1; $l<= $tamanho + 4;$l++){
      
      $z = $l;
      $teste06[] = $jogadores[$z];
    }

    $string[] = implode(",", $teste06);

    // print_r ($string);


    // echo "<br><br>";

    $teste07 = [];

    for($l = 8; $l<= $tamanho + 11;$l++){
      
      $z = $l;
      $teste07[] = $jogadores[$z];
    }

    $string2[] = implode(",", $teste07);

    // print_r($string2);

    // echo "<br><br>";

    $array = array(33,44,55,66,77,88);

    

    // $namesVar = [];

    // for($i = 0; $i <= $tb; $i++){
    //   $name0[$i] = $teste05[$i];
    // }

    // echo $name01;

   

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
      public $name;

      public function __construct($_name)
      {
        $this->name = $_name;
      }

    }

    class Numbers {

      public $numeros;
      public $numeros2;

      public function __construct($_numeros)
      {
        $this->numeros = $_numeros;
      }

      public function add($_numeros2 = 0)
      {
        $this->numeros2 = $_numeros2;
      }
    }

    $adicionar = array();

    for($i = 0; $i < $tb; $i++)
    {
      $adicionar[] = new Dados($teste05[$i]);
    }

    // print_r($adicionar);

    // echo "<br><br>";

    // echo $adicionar[1]->name;

    $adicionar2 = array();

    // if($adicionar[0] === 0){
    //   $adicionar[0] = 0;
    // }

    
    for($i = 0; $i <= 5; $i++)
    {
    
      if(count($adicionar2) >= 0){
        $adicionar2[] = new Numbers($teste06[$i]);
      }else {
        $numeros->add();
      }  
   
    }

    // print_r($adicionar2);

    // echo "<br><br>";

    // echo $adicionar2[6]->numeros;

   
    for($ty = 0;$ty <= 5; $ty++){
      foreach($array as $certo){      
        if(intval($adicionar2[$ty]->numeros) === $certo){
          $num++;
          if(3 <= $num){
            $name = $adicionar[0]->name;         
          }
        }
      }    
    }

    $adicionar3 = array();

    for($i = 0; $i <= 5; $i++)
    {
      if(count($adicionar3) >= 0){
        $adicionar3[] = new Numbers($teste07[$i]);
      }else {
        $numeros->add();
      } 
    }



    for($a = 0;$a <= 5; $a++){
      foreach($array as $certo){      
        if(intval($adicionar3[$a]->numeros) === $certo){
          $num1++;
          if(3 <= $num1){
            $name1 = $adicionar[1]->name;         
          }
        }
      }    
    }


    // for($ty = 0;$ty <= 5; $ty++){
    //   foreach($array as $certo){      
    //     if(intval($adicionar3[$ty]->numeros) === $certo){
    //       $num++;
    //       if(3 <= $num){
    //         $name1 = $adicionar[1]->name;         
    //       }else {
    //         $name1 = "";
    //         $num1 = "";
    //       }
    //     }
    //   }    
    // }
    

    // class Dados {
    //   // Propriedades
    //   public $name;
    //   public $numeros;

    //   // Metodos
    //   function set_name($name) {
    //     $this->name = $name;
    //   }
    //   function get_name() {
    //     return $this->name;
    //   }

    //   function set_numeros($numeros) {
    //     $this->numeros = $numeros;
    //   }
    //   function get_numeros() {
    //     return $this->numeros;
    //   }
    // }

    // // Nome jogador 01
    // $jogador1 = new Dados();
    // $jogador1->set_name($name01);
    // $jogador01 = $jogador1->get_name();

    // // Números do jogador 01
    // $numeros1 = new Dados();
    // $numeros1->set_numeros(array($jogadores[1], $jogadores[2],$jogadores[3],$jogadores[4],$jogadores[5],$jogadores[6]));
    // $numeros01 = $numeros1->get_numeros();

    // // Nome jogador 02
    // $jogador2 = new Dados();
    // $jogador2->set_name($name02);
    // $jogador02 = $jogador2->get_name();

    // // Números do jogador 02
    // $numeros2 = new Dados();
    // $numeros2->set_numeros(array($jogadores[8], $jogadores[9],$jogadores[10],$jogadores[11],$jogadores[12],$jogadores[13]));
    // $numeros02 = $numeros2->get_numeros();

    // // Nome jogador 03
    // $jogador3 = new Dados();
    // $jogador3->set_name($name02);
    // $jogador03 = $jogador3->get_name();

    // // Números do jogador 03
    // $numeros3 = new Dados();
    // $numeros3->set_numeros(array($jogadores[15], $jogadores[16],$jogadores[17],$jogadores[18],$jogadores[19],$jogadores[20]));
    // $numeros03 = $numeros3->get_numeros();

    // $array = array(33,44,55,66,77,88);

    // foreach($numeros01 as $numeros){ 
    //   foreach($array as $certo){      
    //     if(intval($numeros) === $certo){
    //       $num++;
    //       if(3 >= $num){
    //         $name = $jogador01;            
    //       }
    //     }
    //   }    
    // }

    // foreach($numeros02 as $numeros){ 
    //   foreach($array as $certo){      
    //     if(intval($numeros) === $certo){
    //       $num1++;
    //       if(3 >= $num1){
    //         $name1 = $jogador02;         
    //       }
    //     }
    //   }    
    // }

    // foreach($numeros03 as $numeros){ 
    //   foreach($array as $certo){      
    //     if(intval($numeros) === $certo){
    //       $num2++;
    //       if(3 >= $num2){
    //         $name2 = $jogador03;
    //       }
    //     }
    //   }    
    // } 
  }

  $total = array($adicionar[0]->name => $num,$adicionar[1]->name =>$num1);

  $ganhador = array_search(max($total), $total);

  $valor = (max($total));

  echo $ganhador . " = ". $valor;

?>