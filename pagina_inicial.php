<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="./css/tela.css">
  <title>Loteria</title>
</head>

<body>

 <div class="container">

  <div class="login">

    <div class="areaUsuario"></div>

  </div>

  <div class="dados">

    <div class="numerosAcertados">

      <?php

        $array = array(33,44,55,66,77,88);
        require_once "./dados.php";

        echo "<br> Nome: " . $name;
        echo "<br> Números de acertos: " .  $num;

        echo "<br> Nome: " . $name1;
        echo "<br> Números de acertos: " .  $num1;

        echo "<br> Nome: " . $name2;
        echo "<br> Números de acertos: " .  $num2;


        echo "<br><br>";

      ?>

    </div>

    <div class="cadastro">

      <div class="fundoCadastro"></div>

    </div>

    <div class="dadosCadastrados">
      
      <div class="fundoDados">

      <h2>Lista:</h2>

        <!-- <table class="table table-hover table-striped"> -->

          <!-- <thead>

            <th>Nome</th>
            <th>Número 01</th>
            <th>Número 02</th>
            <th>Número 03</th>
            <th>Número 04</th>
            <th>Número 05</th>
            <th>Número 06</th>

          </thead> -->

          <!-- <tbody> -->

            <?php foreach ($registros as $registro) : ?>

            <!-- <tr> -->

              <div class="tabelaRegistro">

                <div class="registro01">
                  <ul>

                    <li><button><img src="./img/x.svg" alt="x"></button></li>
                    <li class="nomeRegistro"><?= $registro['nome'] ?></li>

                  </ul>
                </div>

                <div class="registro02">
                  <ul>
                    <li class="numberRegistro">Números: </li>
                    <li><?= $registro['number1'] ?></li>
                    <li><?= $registro['number2'] ?></li>
                    <li><?= $registro['number3'] ?></li>
                    <li><?= $registro['number4'] ?></li>
                    <li><?= $registro['number5'] ?></li>
                    <li><?= $registro['number6'] ?></li>
                  </ul>
                </div>

              </div>
              

            <!-- </tr> -->

            <?php endforeach ?>

          <!-- </tbody>

        </table> -->

      </div>

    </div>

  </div>
 
 </div>

</body>

</html>