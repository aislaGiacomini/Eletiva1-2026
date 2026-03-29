<?php
    session_start();
    if(!isset($_SESSION['contatos'])){
            $_SESSION['contatos'] = [];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];

        if($nome != "" && $telefone != ""){
            if(array_key_exists($nome, $contatos)){
                echo "<p>O nome $nome ja foi cadastrado</p>";
            } elseif(in_array($telefone, $contatos)){
                echo "<p>O telefone $telefone ja foi cadastrado</p>";
            } else{
                $contatos[$nome] = $telefone;
            }
        }
        ksort($contatos);
        foreach($contatos as $chave => $valor){
        echo "<p>Telefone de $chave: $valor </p>";
    }
    }
?>

<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exercicio 1 - Lista telefonica</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body> 
        <div class="container py-3">
            <h1>Exercicio 1 - Lista telefonica</h1>
            <?php for($i = 0; $i < 5; $i++): ?>
                <form method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control" required="">
                        </div><div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="number" id="telefone" name="telefone" class="form-control" required="">
                    </div>
                    
                </form>
            <?php endfor; ?>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        </div>
    </body>
</html>