<?php 
if(isset($_POST['net'])){
   $arquivo = fopen("dados.txt" , "a");
   fwrite($arquivo , "Voto: " . $_POST['net'] . "\n");
   fclose($arquivo);
}else if(isset($_POST['prime'])){
    $arquivo = fopen("dados.txt" , "a");
   fwrite($arquivo , "Voto: " . $_POST['prime'] . "\n");
   fclose($arquivo);
}

function Computar(){
    $caminhoArquivo = "dados.txt";
    $arquivo = fopen($caminhoArquivo , "r");
    $arq = fread($arquivo, filesize($caminhoArquivo));
    $net = substr_count($arq , "Netflix");

    $contadorPrime = fopen($caminhoArquivo, "r");
    $votoPrime = fread($contadorPrime, filesize($caminhoArquivo));
    $prime = substr_count($arq , "Prime Video");

    if($net > $prime){
        $arquivo = fopen("dados.txt", "a");
        fwrite($arquivo, "Netflix venceu com " . $net . " votos \n");
        fclose($arquivo);
        echo "<p>Netflix: " . $net . " votos.<p>";
        echo "<p>Prime Video: " . $prime. " votos.</p>";
        echo "<p>Netflix venceu.</p>";
    }else if($prime > $net){
        $arquivo = fopen("dados.txt", "a");
        fwrite($arquivo, "Prime Video venceu com " . $prime . " votos \n" );
        fclose($arquivo);
        echo "<p>Prime Video: " . $prime . " votos.<p>";
        echo "<p>Netflix: " . $net . " votos.</p>";
        echo "<p>Prime Video venceu.</p>";
    }else if($prime == $net){
        if($prime == 1){
            $arquivo = fopen("dados.txt", "a");
            fwrite($arquivo, "Netflix empatou com Prime Video com " . $net . " voto cada. \n" );
            fclose($arquivo);
            echo "<p>Netflix: " . $net . " votos.<p>";
            echo "<p>Prime video: " . $prime . " votos.</p>";
            echo "<p>Empate.</p>";
         }else if($prime > 1){
            $arquivo = fopen("dados.txt", "a");
            fwrite($arquivo, "Netflix empatou com Prime Video com " . $net . " votos cada. \n" );
            fclose($arquivo);
            echo "<p>Netflix: " . $net . " votos.<p>";
            echo "<p>Prime Video: " . $prime . " votos.</p>";
            echo "<p>Empate.</p>";
        }
    }
}


if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['computar'])){
    Computar();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <form action="" method="POST">
            <div class="row">
                <div class="col">
                    <br>
                    <h1 class="h1">Plataformas de Streaming</h1>
                    <h2 class="h1">Votação</h2>
                    <div class="row">
    
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/netTeste.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Netflix</p>
                                    <input type="submit" value="Netflix" name="net">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/amazon.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Prime Video</p>
                                    <input type="submit" value="Prime Video" name="prime">
                                </div>
                            </div>
                        </div>
                    <br>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col botao">
                                <input id="btn_computar" type="submit" name="computar" value="Resultado">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>

</html>