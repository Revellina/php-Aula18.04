 
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
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
              <h1 class="h1">Cadastro</h1>
              <h6 class="form-test">Faça seu cadastro,agora!!</h6>
              <h6 class="form-test" href="login.php">Já tem um cadastro? Login aqui!</h6>
          <form method="POST" action="login.php">
              <div class="mb-3 form-flor form-hp" >
                  <label for="exampleFormControlInput1" class="form-label">Nome</label>
                  <input type="nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome" name="nome">
                </div>
                <div class="mb-3 form-flor form-hp" >
                  <label for="exampleFormControlInput1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="emailteste>
                </div>
                <div class="mb-3 form-flor form-hp">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="****" name="senhateste">
                </div>
                <input class="botao" type="submit" value="Entrar" id="Entrar">
          </form>
            </div>
          </div>
        </div>
</body>

</html>