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
        
       
        if(isset($_GET['excluir'])) {

          $excluirSQL = "DELETE FROM numeros WHERE id = ?"; 
          $stmt = $conexao->prepare($excluirSQL); 
          $stmt->bind_param("i", $_GET['excluir']);
          $stmt->execute();
        }
      

        if($resultado2->num_rows > 0)
        {


          echo "<br> Nome:" . $name;
          echo "<br> Números de acertos: " .  $num;
        }

      ?>

    </div>

    <div class="cadastro">


      <form>

      <div class="fundoCadastro">

        

        <div class="nomeCadastro">
        <h2>Cadastro:</h2>
          <p>Nome: <input type="text" name="nameCadastro"></p>
        </div>

        <div class="numerosCadastro">
          <p>Números:</p>
        </div>

        <div class="numerosGerais">
          <ul>
            <li><input type="text" name="numero1"></li> <span>Ⅰ</span>
            <li><input type="text" name="numero2"></li> <span>Ⅰ</span>
            <li><input type="text" name="numero3"></li> <span>Ⅰ</span>
            <li><input type="text" name="numero4"></li> <span>Ⅰ</span>
            <li><input type="text" name="numero5"></li> <span>Ⅰ</span>
            <li><input type="text" name="numero6"></li> <span>Ⅰ</span>
          </ul>
        </div>

        <div class="areaCadastro">
          <button class="btnCadastro" type="submit">Cadastrar</button>
        </div>


      </div>

      </form>

    </div>

    <div class="dadosCadastrados">
      
      <div class="fundoDados">

        <h2>Lista:</h2>


        <?php foreach ($registros as $registro) : ?>

          <div class="tabelaRegistro">

            <div class="registro01">
              <ul>

                <li class="x">
                  
                  <a href="http://localhost/loteria/pagina_inicial.php?excluir=<?= $registro['id'] ?>">
                    <img src="./img/x.svg" alt="x">
                  </a>
                </li>
                <li class="nomeRegistro"><?= $registro['nome'] ?></li>

              </ul>
            </div>

            <div class="registro02">
              
                <h3 class="numberRegistro">Números: </h3>

                <div class="boxNumber">
                <ul class="boxNumeros">
                  <li class="nn"><?= $registro['number1'] ?> <span>Ⅰ</span>
                  <li><?= $registro['number2'] ?></li> <span>Ⅰ</span>
                  <li><?= $registro['number3'] ?></li> <span>Ⅰ</span>
                  <li><?= $registro['number4'] ?></li> <span>Ⅰ</span>
                  <li><?= $registro['number5'] ?></li> <span>Ⅰ</span>
                  <li><?= $registro['number6'] ?></li>
                </ul>
                </div>
              
            </div>

          </div>
    

        <?php endforeach ?>

      </div>

    </div>

  </div>
 
 </div>

</body>

</html>