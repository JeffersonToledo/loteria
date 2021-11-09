<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <title>Loteria</title>
</head>

<body>

  <?php

    $array = array(33,44,55,66,77,88);

    $num = 0;
    $num1 = 0;
    $num3 = 0;
    $num4 = 0;
    $num5 = 0;
    
    $nome = [
      "Helena" => array(31,41,55,66,40,60),
      
      "Jefferson" => array(44,33,55,32,75,78),
    
      "Thales" => array(12,33,54,32,55,78),
    
    ];


    // foreach ($nome as $key => $number) {
    //   switch ($key) {
    //     case "Helena":
    //       foreach($number as $value){
    //         foreach($array as $certo){
    //           if($value === $certo){
    //             $num++;
    //             if(3 <= $num){
    //               $name = $key;
                            
    //             }
    //           }
    //         }
                  
    //       }
    //     break ;
    //     case "Jefferson":
    //       foreach($number as $value){
    //         foreach($array as $certo){
    //           if($value === $certo){
    //             $num1++;
    //             if(3 <= $num1){
    //               $name2 = $key;
                            
    //             }
    //           }
    //         }
                  
    //       }
    //     break;
    //   }
    // }

    
    
    
    if($num > $num1) {
      echo "<br> Nome: " . $name;
      echo "<br> Números de acertos:" .  $num;
    }
    if ($num1 > $num) {
      echo "<br> Nome: " . $name2;
      echo "<br> Números de acertos:" .  $num1 . "<br>";
    }

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

    
    
  ?>

  <table class="table table-hover table-striped">

    <thead>

      <th>Nome</th>
      <th>Número 01</th>
      <th>Número 02</th>
      <th>Número 03</th>
      <th>Número 04</th>
      <th>Número 05</th>
      <th>Número 06</th>

    </thead>

    <tbody>

      <?php foreach ($registros as $registro) : ?>

      <tr>

        <td><?= $registro['nome'] ?></td>
        <td><?= $registro['number1'] ?></td>
        <td><?= $registro['number2'] ?></td>
        <td><?= $registro['number3'] ?></td>
        <td><?= $registro['number4'] ?></td>
        <td><?= $registro['number5'] ?></td>
        <td><?= $registro['number6'] ?></td>

      </tr>

      <?php endforeach ?>

    </tbody>

  </table>

  <?php

        $dadosGerais[] = $registros;

        // array_chunk($dadosGerais,6);

        $teste = mysqli_num_fields($resultado2);

        $num_linhas = mysqli_num_rows($resultado2);

        // echo $num_linhas . "<br><br>";

        $dados = mysqli_fetch_row($resultado2);


        // $row2 = $resultado2 -> fetch_array(MYSQLI_ASSOC);
        // printf ("%s\n", $row2["nome"]);

        // echo "<br><br>";

        // $row2 = $resultado2 -> fetch_array(MYSQLI_NUM);
        // printf ("%s (%s,%s,%s,%s,%s,%s)\n", $row2[0], $row2[1],$row2[2],$row2[3],$row2[4],$row2[5],$row2[6]);

        // print_r($registros[1]['nome']);

        // foreach($dadosGerais as $ee){
        //   for($i = 0; $i < $teste; $i++){
        //     // echo $dados[$i];
        //     foreach($array as $certo){         
        //       if(intval($dados[$i]) === $certo){
        //         $num3++;
        //         if(3 >= $num3){
        //           $name = $dados[0];
                            
        //         }
        //       }
        //     }
        //   }
        // }


        


     
          for($i = 0; $i < $teste; $i++){
            // echo $dados[$i];
            foreach($array as $certo){         
              if(intval($dados[$i]) === $certo){
                $num3++;
                if(3 >= $num3){
                  $name = $dados[0];
                            
                }
              }
            }
          }

          for($a = 0; $a < $num_linhas; $a++)
          {
            
          }


        // print_r($registros);
        // echo "<br><br>";
        // for($j = 0; $j < $teste; $j++){
        //   $array3[] =  $registros[$j]['nome'];
          
        // }

        $array3 = $registros;

        array_splice($array3,2);

        array_splice($array3,0,1);

        // print_r($array3);
        // echo "<br><br>";

        // foreach($array3 as $der => $der2){
        //   foreach($der2 as $der3){
        //     echo $der3;
        //   }
        // }
                
     
            foreach($array as $certo){
              foreach($array3 as $der => $der2){
                foreach($der2 as $der3){         
                  if(intval($der3) === $certo){
                    $num4++;
                    if(3 >= $num4){
                      $name2 = $der2['nome'];
                                
                    }
                  }
                }
              }
            }


            $array4 = $registros;


            array_splice($array4,0,2);

            // print_r($array4);

            foreach($array as $certo){
              foreach($array4 as $ter => $ter2){
                foreach($ter2 as $ter3){         
                  if(intval($ter3) === $certo){
                    $num5++;
                    if(3 >= $num5){
                      $name3 = $ter2['nome'];
                                
                    }
                  }
                }
              }
            }
        

        // foreach($registros as $val => $nn){
        //   foreach($nn as $mm){
        //   foreach($array as $certo){         
        //     if(intval($mm) === $certo){
        //       $num3++;
        //       if(3 >= $num3){
        //         $name = $nn['nome'];
                          
        //       }
        //     }
        //   }
        // }
        // }

        

        echo "<br> Nome: " . $name;
        echo "<br> Números de acertos: " .  $num3;

        echo "<br> Nome: " . $name2;
        echo "<br> Números de acertos: " .  $num4;

        echo "<br> Nome: " . $name3;
        echo "<br> Números de acertos: " .  $num5;


       echo "<br><br>";
       

        // foreach($registros as $far => $far2){
        //   foreach($far2 as $far3){
        //     echo array_search("Helena",$far3['nome']);
        //   }
        // }

      
      ?>


</body>

</html>