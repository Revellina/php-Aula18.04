<?php
if(isset($_POST['emailteste']) && isset($_POST['senhateste'])){
    $email = $_POST['emailteste'];
    $senha = $_POST['senhateste'];     

    verificaDados($email, $senha);
}

function verificaDados($emailteste, $senhateste){
    $arquivo = 'dados.txt'; 
    if(file_exists($arquivo)){
        $arq = fopen($arquivo , 'r');

        $texto = fread($arq , filesize($arquivo));

        if(isset($emailteste) && isset($senhateste)){
            if(str_contains($texto , $emailteste) && str_contains($texto , $senhateste)){
                echo 
                "<div class=classeDivPHP>" . $_POST['emailteste'] . " logado com sucesso." . "</div>";    
            }else{
                echo "<div class=classeDivPHP> <a href=cadastro.php> <button>Cadastrar-se</button> </a> </div> <br>";
                echo "<div class=classeDivPHP> Usuário não encontrado </div>";
            }
        }else{
            echo "<div class=classeDivPHP> <a href=cadastro.php><button>Cadastrar-se</button></a> </div> <br>";
            echo "<div class=classeDivPHP> Email não cadastrado. </div>";
        }
    }else{
        echo "<div class=classeDivPHP> <a href=cadastro.php><button>Cadastrar-se</button></a> </div> <br>";
        echo "Registro inexistente </div>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body class="body">
        <div class="container">
          <div class="row">
            <div class="col">
              <br>
              <h1 class="h1">Login</h1>
           <a href="cadastro.php">
               <h6 class="form-test">Já tem um cadastro? Login aqui!</h6>
           </a>
          <form  method="POST" action="login.php">
                <div class="mb-3 form-flor form-hp" >
                  <label for="exampleFormControlInput1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="emailteste" required>
                </div>
                <div class="mb-3 form-flor form-hp">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="****" name="senhateste" required>
                </div>
                 <div class="botao">
                  <input  type="submit" value="Entrar" id="Entrar">
                </div>
          </form>
          

            </div>
          </div>
        </div>
</body>

</html>
