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

    $conexao = $conexaoLogin;
    $resultado = $conexao->query($sql);

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

        while($row = $resultado->fetch_assoc()) {

          for($i = 0; $i < 2; $i++){
            $dados[] = $row;
            foreach($dados as $dd){
              echo $dd;
            }
          }
        }
        

        

        

        foreach($registros as $val => $nn){
          foreach($nn as $mm){
          foreach($array as $certo){         
            if(intval($mm) === $certo){
              $num3++;
              if(3 >= $num3){
                $name = $nn['nome'];
                          
              }
            }
          }
        }
        }

        

        echo "<br> Nome: " . $name;
        echo "<br> Números de acertos: " .  $num3;

      
      ?>


</body>

</html>