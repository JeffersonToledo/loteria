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
    require_once "./dados.php";   
    
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
    
    echo "<br> Nome: " . $name;
    echo "<br> Números de acertos: " .  $num;

    echo "<br> Nome: " . $name1;
    echo "<br> Números de acertos: " .  $num1;

    echo "<br> Nome: " . $name2;
    echo "<br> Números de acertos: " .  $num2;


    echo "<br><br>";
       


  ?>


</body>

</html>